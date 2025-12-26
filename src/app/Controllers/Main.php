<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProjectListModel;
use App\Models\CertificatesModel;

class Main extends BaseController
{
    protected $projectModel;

    public function __construct()
    {
        $this->projectModel = new ProjectListModel();
        $this->certificatesModel = new CertificatesModel();
    }

    public function index()
    {
        try {
            $data['projects'] = $this->projectModel->getProjectsWithImages();
        } catch (\Exception $e) {
            $data['projects'] = [];
        }

        try {
            $data['certificates'] = $this->certificatesModel->getAllCertificates();
        } catch (\Exception $e) {
            $data['certificates'] = [];
        }
        
        return view('dashboard/index', $data);
    }
}
