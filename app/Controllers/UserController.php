<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\UserRoleModel;

class UserController extends Controller
{
    public function index()
    {
        $session = session();
        helper('url');
        helper(['form']);
        $userModel = new UserModel();
        // Get the Database instance
        $db = \Config\Database::connect();
        $data = [];
        // Execute a direct SQL query
        $query = $db->query('SELECT users.*,user_role.role_name From users LEFT JOIN user_role ON user_role.id=users.user_role_id WHERE users.active IN (0,1) AND users.status=1 ORDER BY users.id DESC');

        // Get the result set
        $data['userDetails'] = $query->getResultArray();

        $data['controllerName'] = $this->request->uri->getSegment(1);
        $file_name = "userlist";
        // Set the title
        $data['title'] = 'User List';
        echo view($file_name, $data);
    }
}
