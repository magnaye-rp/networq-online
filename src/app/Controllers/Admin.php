<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjectListModel;
use App\Models\ProjectImagesModel;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    protected $projectModel;

    public function __construct()
    {
        $this->projectModel = new ProjectListModel();
    }

    public function index()
    {
        if (!auth()->loggedIn()) {
            return redirect()->to('/login');
        }

        $data['projects'] = $this->projectModel->getProjectsWithImages();
        return view('admin/index', $data);
    }

    public function create()
    {
        // Only allow POST method
        if ($this->request->getMethod() === 'post') {
            // Define validation rules
            $rules = [
                'project_name' => 'required|min_length[3]|max_length[255]',
                'description' => 'required',
                'technology_stack' => 'required',
                'github_link' => 'permit_empty|valid_url',
                'live_demo_link' => 'permit_empty|valid_url'
            ];

            // Run validation
            if (!$this->validate($rules)) {
                return redirect()->back()
                    ->withInput()
                    ->with('errors', $this->validator->getErrors());
            }

            // Handle file uploads
            $imagesData = [];
            $uploadPath = FCPATH . 'uploads/projects/';
            
            // Create upload directory if it doesn't exist
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Process up to 3 image uploads
            for ($i = 1; $i <= 3; $i++) {
                $file = $this->request->getFile("image_$i");
                
                if ($file && $file->isValid() && !$file->hasMoved()) {
                    // Validate file type
                    $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
                    if (!in_array($file->getMimeType(), $allowedTypes)) {
                        return redirect()->back()
                            ->withInput()
                            ->with('error', "Invalid file type for image $i. Only JPG, PNG, and GIF files are allowed.");
                    }

                    // Validate file size (5MB max - adjusted from 100MB for security)
                    if ($file->getSize() > 100 * 1024 * 1024) {
                        return redirect()->back()
                            ->withInput()
                            ->with('error', "File size for image $i exceeds 5MB limit.");
                    }

                    // Generate unique filename
                    $newName = $file->getRandomName();
                    
                    // Move uploaded file
                    if ($file->move($uploadPath, $newName)) {
                        $imagesData[] = [
                            'image_path' => 'uploads/projects/' . $newName,
                            'uploaded_at' => date('Y-m-d H:i:s')
                        ];
                    } else {
                        return redirect()->back()
                            ->withInput()
                            ->with('error', "Failed to upload image $i.");
                    }
                }
            }

            // Prepare project data
            $projectData = [
                'project_name' => $this->request->getPost('project_name'),
                'description' => $this->request->getPost('description'),
                'technology_stack' => $this->request->getPost('technology_stack'),
                'github_link' => $this->request->getPost('github_link') ?: null,
                'live_demo_link' => $this->request->getPost('live_demo_link') ?: null,
            ];

            // Use the model method to add project with images
            try {
                if ($this->projectModel->addProjectWithImages($projectData, $imagesData)) {
                    return redirect()->to('/admin')
                        ->with('success', 'Project added successfully!');
                } else {
                    return redirect()->back()
                        ->withInput()
                        ->with('error', 'Failed to add project. Please try again.');
                }
            } catch (\Exception $e) {
                // Log the error if needed
                log_message('error', 'Project creation failed: ' . $e->getMessage());
                
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'An error occurred while adding the project.');
            }
        }

        // If not POST request, redirect to admin
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        if (!$this->projectModel->delete($id)) {
            return redirect()->to('/admin')->with('error', 'Failed to delete project.');
        }

        return redirect()->to('/admin')->with('success', 'Project deleted successfully!');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->to('/')->with('success', 'You have been logged out successfully.');
    }
}
