<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table            = 'report';
    protected $primaryKey       = 'id';

    protected $allowedFields    = ['id','ipDevice','imgUrl','category','description','geodata','anonymously','firstname','lastname','phone','email','status','declinedCount','localAuthorityId'];


}
