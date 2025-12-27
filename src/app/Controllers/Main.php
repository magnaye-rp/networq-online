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
            $data['projectsLimited'] = array_slice($data['projects'], 0, 4);
            $data['totalProjects'] = count($data['projects']);
            $data['hasMoreProjects'] = $data['totalProjects'] > 4;
        } catch (\Exception $e) {
            $data['projects'] = [];
            $data['projectsLimited'] = [];
            $data['totalProjects'] = 0;
            $data['hasMoreProjects'] = false;
        }

        try {
            $data['certificates'] = $this->certificatesModel->getAllCertificates();
            $data['certificatesLimited'] = array_slice($data['certificates'], 0, 4);
            $data['totalCertificates'] = count($data['certificates']);
            $data['hasMoreCertificates'] = $data['totalCertificates'] > 4;
        } catch (\Exception $e) {
            $data['certificates'] = [];
            $data['certificatesLimited'] = [];
            $data['totalCertificates'] = 0;
            $data['hasMoreCertificates'] = false;
        }
        
        return view('dashboard/index', $data);
    }
}
