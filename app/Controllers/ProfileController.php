<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $session = session();
        helper('url');
        helper(['form']);
        $data = [];
        $file_name = "profile";
        // Set the title
        $data['title'] = 'Profile';
        echo view('profile', $data);
    }
}
