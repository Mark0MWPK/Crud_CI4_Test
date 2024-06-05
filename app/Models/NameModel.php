<?php
namespace App\Models;
use CodeIgniter\Model;

class NameModel extends Model {
    protected $table = 'test';
    
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'address','email'];
}