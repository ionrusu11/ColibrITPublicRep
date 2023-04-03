<?php

namespace App\Models;

use CodeIgniter\Model;

class OperatorsModel extends Model
{
    protected $table            = 'operator';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id','firstname','lastname','username','password'];
}
