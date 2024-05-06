<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\UserRoleModel;

class SignupController extends Controller
{
    public function index()
    {
        $session = session();
        if ($session->get('id')) {
            return redirect()->to('/dashboard');
        }
        helper(['form']);
        $userRoleModel = new UserRoleModel();
        $data = [];
        $data['userRoleModel'] = $userRoleModel->where('active', 1)->findAll();
        // Set the title
        $data['title'] = 'Signup';
        echo view('signup', $data);
    }

    public function store()
    {
        $userRoleModel = new UserRoleModel();
        helper(['form']);
        $rules = [
            'user_role_id'   => 'required',
            'fname'          => 'required|min_length[2]|max_length[50]',
            'lname'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'mobile'         => 'required|exact_length[10]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {

            // save data in to user db
            $userModel = new UserModel();
            $data = [
                'user_role_id'     => $this->request->getVar('user_role_id'),
                'fname'    => $this->request->getVar('fname'),
                'mname'    => $this->request->getVar('mname'),
                'lname'     => $this->request->getVar('lname'),
                'email'    => $this->request->getVar('email'),
                'mobile'     => $this->request->getVar('mobile'),
                'add_date' => date("Y-m-d H:i:s"),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            if ($userModel->save($data)) {
                session()->setFlashdata('success', 'Your are successfully signup in this portal. Please login to use this portal funcanality.');
                return redirect()->to('/signin');
            } else {
                session()->setFlashdata('error', 'Something went worng. Please contact to the admin.');
                return redirect()->to('/');
            }
        } else {
            $data['validation'] = $this->validator;
            $data['userRoleModel'] = $userRoleModel->where('active', 1)->findAll();
            // Set the title
            $data['title'] = 'Signup';
            echo view('signup', $data);
        }
    }
}
