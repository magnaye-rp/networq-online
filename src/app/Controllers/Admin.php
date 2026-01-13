<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjectListModel;
use App\Models\ProjectImagesModel;
use App\Models\CertificatesModel;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    protected $projectModel;
    protected $certificatesModel;
    protected $imagesModel;

    public function __construct()
    {
        $this->projectModel = new ProjectListModel();
        $this->certificatesModel = new CertificatesModel();
        $this->imagesModel = new ProjectImagesModel();
    }

    public function index()
    {
        if (!auth()->loggedIn()) {
            return redirect()->to('/login');
        }

        $data['projects'] = $this->projectModel->getProjectsWithImages();
        $data['certificates'] = $this->certificatesModel->getCertificatesByPriority();
        return view('admin/index', $data);
    }

    public function create()
    {
        $projectData = [
            'project_name' => $this->request->getPost('project_name'),
            'description' => $this->request->getPost('description'),
            'technology_stack' => $this->request->getPost('technology_stack'),
            'github_link' => $this->request->getPost('github_link') ?: null,
            'live_demo_link' => $this->request->getPost('live_demo_link') ?: null,
        ];

        $imagesData = [];
        $uploadPath = FCPATH . 'uploads/projects/';
        
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // Get all uploaded files dynamically
        $files = $this->request->getFiles();

        $imagesData = []; 

        foreach ($files as $key => $fileArray) {
            if (!is_array($fileArray)) {
                $fileArray = [$fileArray];
            }
            
            foreach ($fileArray as $index => $file) {

                if (!is_object($file)) {
                    log_message('error', "File at index [$key][$index] is not an object");
                    continue;
                }
                
                if (!$file->isValid()) {
                    log_message('error', "File at index [$key][$index] is not valid");
                    continue;
                }
                
                $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
                
                try {
                    if (!in_array($file->getMimeType(), $allowedTypes)) {
                        continue; 
                    }
                    if ($file->getSize() > 5 * 1024 * 1024) {
                        continue; 
                    }
                    
                    $newName = $file->getRandomName();
                    
                    if ($file->move($uploadPath, $newName)) {
                        $imagesData[] = [
                            'image_path' => 'uploads/projects/' . $newName,
                            'uploaded_at' => date('Y-m-d H:i:s')
                        ];
                        
                        // Debug: Verify array is growing
                        echo "Added file #$count: $newName<br>";
                    } else {
                        log_message('error', "Failed to move file: " . $file->getName());
                    }
                } catch (\Exception $e) {
                    log_message('error', "Error processing file: " . $e->getMessage());
                    continue;
                }
            }
        }


        
        $result = $this->projectModel->addProjectWithImages($projectData, $imagesData);

        if ($result) {
            return redirect()->to('/admin')->with('success', 'Project added successfully with ' . count($imagesData) . ' images!');
        } else {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to add project. Please try again.');
        }
    }

    public function delete($id)
    {
        if (!$this->projectModel->delete($id)) {
            return redirect()->to('/admin')->with('error', 'Failed to delete project.');
        }

        return redirect()->to('/admin')->with('success', 'Project deleted successfully!');
    }

    public function edit($id)
    {
        if (!auth()->loggedIn()) {
            return redirect()->to('/login');
        }

        $project = $this->projectModel->getProjectWithAllImages($id);

        if (!$project) {
            return redirect()->to('/admin')->with('error', 'Project not found.');
        }

        $data['project'] = $project;
        return view('admin/edit_project', $data);
    }

    public function update($id)
    {
        if (!auth()->loggedIn()) {
            return redirect()->to('/login');
        }

        // Validate project exists
        $project = $this->projectModel->find($id);
        if (!$project) {
            return redirect()->to('/admin')->with('error', 'Project not found.');
        }

        $projectData = [
            'project_name' => $this->request->getPost('project_name'),
            'description' => $this->request->getPost('description'),
            'technology_stack' => $this->request->getPost('technology_stack'),
            'github_link' => $this->request->getPost('github_link') ?: null,
            'live_demo_link' => $this->request->getPost('live_demo_link') ?: null,
        ];

        $uploadPath = FCPATH . 'uploads/projects/';

        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // Get all uploaded files
        $files = $this->request->getFiles();
        $imagesData = [];

        foreach ($files as $key => $fileArray) {
            if (!is_array($fileArray)) {
                $fileArray = [$fileArray];
            }

            foreach ($fileArray as $index => $file) {
                if (!is_object($file) || !$file->isValid()) {
                    continue;
                }

                $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];

                try {
                    if (!in_array($file->getMimeType(), $allowedTypes)) {
                        continue;
                    }
                    if ($file->getSize() > 5 * 1024 * 1024) {
                        continue;
                    }

                    $newName = $file->getRandomName();

                    if ($file->move($uploadPath, $newName)) {
                        $imagesData[] = [
                            'image_path' => 'uploads/projects/' . $newName,
                            'uploaded_at' => date('Y-m-d H:i:s')
                        ];
                    }
                } catch (\Exception $e) {
                    log_message('error', 'Error processing file: ' . $e->getMessage());
                    continue;
                }
            }
        }

        try {
            $result = $this->projectModel->updateProjectWithImages($id, $projectData, $imagesData);

            if ($result) {
                $imageCount = count($imagesData);
                $message = 'Project updated successfully!';
                if ($imageCount > 0) {
                    $message .= " Added {$imageCount} new image(s).";
                }
                return redirect()->to('/admin/edit/' . $id)->with('success', $message);
            } else {
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Failed to update project. Please try again.');
            }
        } catch (\Exception $e) {
            log_message('error', 'Project update error: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to update project. Please try again.');
        }
    }

    public function deleteImage($id)
    {
        if (!auth()->loggedIn()) {
            return redirect()->to('/login');
        }

        $image = $this->imagesModel->find($id);

        if (!$image) {
            return redirect()->back()->with('error', 'Image not found.');
        }

        $projectId = $image['project_id'];

        // Delete image file
        $imagePath = FCPATH . $image['image_path'];
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete image record
        if ($this->imagesModel->delete($id)) {
            return redirect()->to('/admin/edit/' . $projectId)->with('success', 'Image deleted successfully!');
        } else {
            return redirect()->to('/admin/edit/' . $projectId)->with('error', 'Failed to delete image.');
        }
    }

    public function createCertificate()
    {
        if (!auth()->loggedIn()) {
            return redirect()->to('/login');
        }

        $certificateData = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'issued_by' => $this->request->getPost('issued_by'),
            'date_issued' => $this->request->getPost('date_issued'),
            'date_expiry' => $this->request->getPost('date_expiry') ?: null,
        ];

        // Handle certificate image upload
        $uploadPath = FCPATH . 'uploads/certificates/';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
            
            if (in_array($file->getMimeType(), $allowedTypes) && $file->getSize() <= 5 * 1024 * 1024) {
                $newName = $file->getRandomName();
                if ($file->move($uploadPath, $newName)) {
                    $certificateData['image_path'] = 'uploads/certificates/' . $newName;
                }
            }
        }

        try {
            if ($this->certificatesModel->addCertificate($certificateData)) {
                return redirect()->to('/admin')->with('success', 'Certificate added successfully!');
            } else {
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Failed to add certificate. Please try again.');
            }
        } catch (\Exception $e) {
            log_message('error', 'Certificate creation error: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to add certificate. Please try again.');
        }
    }

    public function deleteCertificate($id)
    {
        if (!auth()->loggedIn()) {
            return redirect()->to('/login');
        }

        $certificate = $this->certificatesModel->find($id);
        if (!$certificate) {
            return redirect()->to('/admin')->with('error', 'Certificate not found.');
        }

        // Delete image file if exists
        if (!empty($certificate['image_path'])) {
            $imagePath = FCPATH . $certificate['image_path'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        if ($this->certificatesModel->delete($id)) {
            return redirect()->to('/admin')->with('success', 'Certificate deleted successfully!');
        } else {
            return redirect()->to('/admin')->with('error', 'Failed to delete certificate.');
        }
    }

    public function updateProfilePic()
    {
        if (!auth()->loggedIn()) {
            return redirect()->to('/login');
        }

        $file = $this->request->getFile('profile_pic');
        
        if (!$file || !$file->isValid()) {
            return redirect()->back()
                ->with('error', 'Please select a valid image file.');
        }

        // Check file type
        $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
        if (!in_array($file->getMimeType(), $allowedTypes)) {
            return redirect()->back()
                ->with('error', 'Only JPG, PNG, and GIF images are allowed.');
        }

        // Check file size (2MB limit)
        if ($file->getSize() > 2 * 1024 * 1024) {
            return redirect()->back()
                ->with('error', 'Image size must be less than 2MB.');
        }

        // Create uploads directory if it doesn't exist
        $uploadPath = FCPATH . 'uploads/';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // Static filename: profile-pic.jpg (will overwrite existing file)
        $staticFilename = 'profile-pic.jpg';
        $targetPath = $uploadPath . $staticFilename;

        try {
            // Remove old profile picture if exists
            if (file_exists($targetPath)) {
                unlink($targetPath);
            }

            // Move the uploaded file with static name
            if ($file->move($uploadPath, $staticFilename)) {
                return redirect()->to('/admin')->with('success', 'Profile picture updated successfully!');
            } else {
                return redirect()->back()
                    ->with('error', 'Failed to upload profile picture. Please try again.');
            }
        } catch (\Exception $e) {
            log_message('error', 'Profile picture upload error: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'An error occurred while updating profile picture.');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->to('/')->with('success', 'You have been logged out successfully.');
    }
}
