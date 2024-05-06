<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProjectModel;
use App\Models\IssueTypeModel;
use App\Models\PriorityModel;
use App\Models\StatusModel;
use App\Models\UserModel;
use App\Models\UserRoleModel;
use App\Models\IssueModel;

class TaskBoardController extends Controller
{
    public function index()
    {
        $session = session();
        helper('url');
        helper(['form']);
        $issueModel = new IssueModel();
        // Get the Database instance
        $db = \Config\Database::connect();
        $data = [];
        // Execute a direct SQL query
        $query = $db->query('SELECT issue.*,project.project_name, issuetype.issue_name, issuestatus.status_name, CONCAT(u1.fname," ",u1.mname," ",u1.lname) AS reporter, CONCAT(u2.fname," ",u2.mname," ",u2.lname) AS assignee,priority.priority_name FROM issue LEFT JOIN project on project.id = issue.project_id LEFT JOIN issuetype ON issuetype.id = issue.issuetype_id LEFT JOIN issuestatus ON issuestatus.id = issue.issuestatus_id LEFT JOIN users AS u1 ON u1.id = issue.reporter LEFT JOIN users AS u2 ON u2.id = issue.assignee LEFT JOIN priority ON priority.id = issue.priority_id WHERE issue.active IN (0,1) AND issue.status=1 ORDER BY issue.id DESC');

        // Get the result set
        $data['issueDetails'] = $query->getResultArray();
        $data['controllerName'] = $this->request->uri->getSegment(1);
        $file_name = "taskboard";
        // Set the title
        $data['title'] = 'Task Board';
        echo view($file_name, $data);
    }

    public function assigntask()
    {
        $session = session();
        helper('url');
        helper(['form']);
        $issueModel = new IssueModel();
        // Get the Database instance
        $db = \Config\Database::connect();
        $data = [];
        // Execute a direct SQL query
        $sesid = $session->get('id');
        $query = $db->query('SELECT issue.*,project.project_name, issuetype.issue_name, issuestatus.status_name, CONCAT(u1.fname," ",u1.mname," ",u1.lname) AS reporter, CONCAT(u2.fname," ",u2.mname," ",u2.lname) AS assignee,priority.priority_name FROM issue LEFT JOIN project on project.id = issue.project_id LEFT JOIN issuetype ON issuetype.id = issue.issuetype_id LEFT JOIN issuestatus ON issuestatus.id = issue.issuestatus_id LEFT JOIN users AS u1 ON u1.id = issue.reporter LEFT JOIN users AS u2 ON u2.id = issue.assignee LEFT JOIN priority ON priority.id = issue.priority_id WHERE issue.active IN (0,1) AND issue.status=1 AND issue.assignee=' . $sesid . ' ORDER BY issue.id DESC');

        // Get the result set
        $data['issueDetails'] = $query->getResultArray();
        $data['controllerName'] = $this->request->uri->getSegment(1);
        // Set the page name
        $data['pageTitle'] = "Assign Task";
        // Set the title
        $data['title'] = 'Assign Task';
        $file_name = "assigntask";
        echo view($file_name, $data);
    }

    public function addTask()
    {
        $session = session();
        $projectModel = new ProjectModel();
        $issueTypeModel = new IssueTypeModel();
        $priorityModel = new PriorityModel();
        $statusModel = new StatusModel();
        $userModel = new UserModel();

        helper('url');
        helper(['form']);

        $data = [];
        $data['projectDetails'] = $projectModel->where('active', 1)->findAll();
        $data['issueTypeDetails'] = $issueTypeModel->where('active', 1)->findAll();
        $data['issueStatusDetails'] = $statusModel->where('active', 1)->findAll();
        $data['userDetails'] = $userModel->where('active', 1)->findAll();
        $data['priorityDetails'] = $priorityModel->where('active', 1)->findAll();

        $data['controllerName'] = $this->request->uri->getSegment(1);
        // Set the page name
        $data['pageTitle'] = "Add Task";
        // Set the title
        $data['title'] = 'Add Task';
        $file_name = "addtask";
        echo view($file_name, $data);
    }

    public function store()
    {
        $session = session();
        $userRoleModel = new UserRoleModel();
        helper(['form']);

        $rules = [
            'due_date' => 'required',
            'project_id' => 'required',
            'issuetype_id' => 'required',
            'issuestatus_id' => 'required',
            'summary' => 'required',
            'points' => 'required',
            'description' => 'required',
            'reporter' => 'required',
            'assignee' => 'required',
            'priority' => 'required',
        ];

        if ($this->validate($rules)) {

            // save data in to user db
            $issueModel = new IssueModel();
            $data = [

                'due_date' => $this->request->getVar('due_date'),
                'project_id' => $this->request->getVar('project_id'),
                'issuetype_id' => $this->request->getVar('issuetype_id'),
                'issuestatus_id' => $this->request->getVar('issuestatus_id'),
                'summary' => $this->request->getVar('summary'),
                'points' => $this->request->getVar('points'),
                'description' => $this->request->getVar('description'),
                'reporter' => $this->request->getVar('reporter'),
                'assignee' => $this->request->getVar('assignee'),
                'priority_id' => $this->request->getVar('priority'),
                'add_by' => $session->get('id'),
                'add_date' => date("Y-m-d H:i:s")
            ];

            if ($issueModel->save($data)) {
                session()->setFlashdata('success', 'Task added successfully.');
                return redirect()->to('/taskboard');
            } else {
                session()->setFlashdata('error', 'Something went worng. Please contact to the admin.');
                return redirect()->to('/addTask');
            }
        } else {
            session()->setFlashdata('error', 'Something went worng. Please contact to the admin.');
            return redirect()->to('/addTask');
        }
    }

    public function edittask($id)
    {
        $id = base64_decode($id);
        $session = session();
        $projectModel = new ProjectModel();
        $issueTypeModel = new IssueTypeModel();
        $priorityModel = new PriorityModel();
        $statusModel = new StatusModel();
        $userModel = new UserModel();
        $issueModel = new IssueModel();
        helper('url');
        helper(['form']);

        $data = [];
        // Query for geting data for dropdowns
        $data['projectDetails'] = $projectModel->where('active', 1)->findAll();
        $data['issueTypeDetails'] = $issueTypeModel->where('active', 1)->findAll();
        $data['issueStatusDetails'] = $statusModel->where('active', 1)->findAll();
        $data['userDetails'] = $userModel->where('active', 1)->findAll();
        $data['priorityDetails'] = $priorityModel->where('active', 1)->findAll();

        // Query for geting data by id
        $condition = ['id' => $id];
        $data['issueDetailsById'] = $issueModel->where($condition)->first();

        $data['controllerName'] = $this->request->uri->getSegment(1);
        // Set the page name
        $data['pageTitle'] = "Add Task";
        // Set the title
        $data['title'] = 'Add Task';
        $file_name = "edittask";
        echo view($file_name, $data);
    }

    public function update()
    {
        $session = session();
        $userRoleModel = new UserRoleModel();
        helper(['form']);

        $rules = [
            'due_date' => 'required',
            'editid' => 'required',
            'project_id' => 'required',
            'issuetype_id' => 'required',
            'issuestatus_id' => 'required',
            'summary' => 'required',
            'points' => 'required',
            'description' => 'required',
            'reporter' => 'required',
            'assignee' => 'required',
            'priority' => 'required',
        ];

        if ($this->validate($rules)) {

            // save data in to user db
            if ($this->request->getVar('actual_end') == "") {
                $actual_end = "NULL";
            } else {
                $actual_end = $this->request->getVar('actual_end');
            }
            if ($this->request->getVar('actual_start') == "") {
                $actual_start = "NULL";;
            } else {
                $actual_start = $this->request->getVar('actual_start');
            }
            $issueModel = new IssueModel();
            $data2 = [
                'due_date' => $this->request->getVar('due_date'),
                'project_id' => $this->request->getVar('project_id'),
                'issuetype_id' => $this->request->getVar('issuetype_id'),
                'issuestatus_id' => $this->request->getVar('issuestatus_id'),
                'summary' => $this->request->getVar('summary'),
                'points' => $this->request->getVar('points'),
                'description' => $this->request->getVar('description'),
                'reporter' => $this->request->getVar('reporter'),
                'assignee' => $this->request->getVar('assignee'),
                'priority_id' => $this->request->getVar('priority'),
                'edit_by' => $session->get('id'),
                'edit_date' => date("Y-m-d H:i:s"),
                'actual_start' => $this->request->getVar('actual_start'),
                'actual_end' => $this->request->getVar('actual_end')
            ];
            $session = session();
            if ($issueModel->update($this->request->getVar('editid'), $data2)) {
                if ($session->get('userRoleId') == 1 || $session->get('userRoleId') == 2) {
                    session()->setFlashdata('success', 'Task successfully updated.');
                    return redirect()->to('/taskboard');
                } else {
                    session()->setFlashdata('success', 'Task successfully updated.');
                    return redirect()->to('/assigntask');
                }
            } else {
                if ($session->get('userRoleId') == 1 || $session->get('userRoleId') == 2) {
                    session()->setFlashdata('error', 'Something went worng. Please contact to the admin.');
                    return redirect()->to('/taskboard');
                } else {
                    session()->setFlashdata('error', 'Something went worng. Please contact to the admin.');
                    return redirect()->to('/assigntask');
                }
            }
        } else {
            session()->setFlashdata('error', 'Something went worng. Please contact to the admin.');
            return redirect()->to('/addTask');
        }
    }

    public function deletetask($id)
    {
        $id = base64_decode($id);
        $session = session();
        $userRoleModel = new UserRoleModel();
        helper(['form']);
        $issueModel = new IssueModel();
        $data = [
            'active' => 2,
            'status' => 0,
            'edit_by' => $session->get('id'),
            'edit_date' => date("Y-m-d H:i:s")
        ];

        if ($issueModel->delete($id)) {
            session()->setFlashdata('success', 'Task successfully deleted.');
            return redirect()->to('/taskboard');
        } else {
            session()->setFlashdata('error', 'Something went worng. Please contact to the admin.');
            return redirect()->to('/taskboard');
        }
    }
}
