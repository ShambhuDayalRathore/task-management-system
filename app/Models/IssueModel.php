<?php

namespace App\Models;

use CodeIgniter\Model;

class IssueModel extends Model
{
    protected $table = 'issue';

    protected $allowedFields = [
        'project_id',
        'issuetype_id',
        'issuestatus_id',
        'summary',
        'description',
        'reporter',
        'assignee',
        'due_date',
        'priority_id',
        'actual_start',
        'actual_end',
        'points',
        'not_in_use',
        'add_by',
        'add_date',
        'edit_by',
        'edit_date'
    ];
}
