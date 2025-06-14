<?php

namespace App\Models;
use CodeIgniter\Model;

class TodoModel extends Model
{
    protected $table = 'todolist';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'status'];
}
