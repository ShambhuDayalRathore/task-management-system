<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = [
        'fname',
        'mname',
        'lname',
        'email',
        'mobile',
        'add_by',
        'add_date',
        'edit_by',
        'edit_date',
        'user_role_id',
        'isLoggedIn', 'password'
    ];
    // protected $table = 'userold';

    // protected $allowedFields = [
    //     'name',
    //     'email',
    //     'password',
    //     'created_at'
    // ];
}
