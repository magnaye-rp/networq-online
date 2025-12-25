<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProjectListModel;

class Main extends BaseController
{
    protected $projectModel;

    public function __construct()
    {
        $this->projectModel = new ProjectListModel();
    }

    public function index()
    {
        try {
            $data['projects'] = $this->projectModel->getProjectsWithImages();
        } catch (\Exception $e) {
            $data['projects'] = [];
        }
        return view('dashboard/index', $data);
    }
}
