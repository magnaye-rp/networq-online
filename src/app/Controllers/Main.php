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
        $data['projects'] = $this->projectModel->getProjectsWithImages();
        return view('dashboard/index', $data);
    }
}
