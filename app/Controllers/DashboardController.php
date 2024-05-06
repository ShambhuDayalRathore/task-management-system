<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $session = session();
        helper('url');
        helper(['form']);
        // echo "Hello : " . $session->get('name');
        $data = [];
        $data['controllerName'] = $this->request->uri->getSegment(1);
        $file_name = "dashboard";
        // Set the title
        $data['title'] = 'Dashboard';
        echo view($file_name, $data);
    }
}
