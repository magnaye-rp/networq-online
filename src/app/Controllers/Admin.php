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

// Debug: Check final result
// print_r($imagesData);
// echo "Total files processed: $count";
        
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

    public function logout()
    {
        auth()->logout();
        return redirect()->to('/')->with('success', 'You have been logged out successfully.');
    }
}
