<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class SigninController extends Controller
{
    public function index()
    {
        $session = session();
        if ($session->get('id')) {
            return redirect()->to('/dashboard');
        }

        helper(['form']);
        $data = [];
        // Set the title
        $data['title'] = 'Signin';
        echo view('signin', $data);
    }

    public function signout()
    {
        // Destroy user session
        session()->destroy();
        // Redirect to the login page or any other page
        return redirect()->to('signin');
    }

    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['fname'] . ' ' . $data['mname'] . ' ' . $data['lname'],
                    'email' => $data['email'],
                    'userRoleId' => $data['user_role_id'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }
}
