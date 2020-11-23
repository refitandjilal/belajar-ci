<?php
namespace App\Models;
use CodeIgniter\Model\Database\ConnectonInterface;
use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'users';

    protected $allowedFields = ['name', 'email'];
}
?>