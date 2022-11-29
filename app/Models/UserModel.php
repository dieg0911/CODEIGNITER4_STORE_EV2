<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'users';
    
    protected $allowedFields = [
        'NAME',
        'EMAIL',
        'PASSWORD',
        'CREATED_AT',
        'TYPE',
        'ADDRESS'
    ];
}