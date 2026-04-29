<?php
namespace App\Controller;
require_once '../app/core/Controller.php';
require_once '../app/models/User.php';

use App\Core\Controller;

class AuthController extends Controller
{
    public function login()
    {
        
    }

    public function register()
    {
        require_once '../app/views/users/register.php';
    }
}


?>