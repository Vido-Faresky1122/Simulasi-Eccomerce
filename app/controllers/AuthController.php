<?php
namespace App\Controller;
require_once '../app/core/Controller.php';
require_once '../app/models/User.php';

use App\Core\Controller;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        $this->view('users.login');
    }

    public function register()
    {
        $this->view('users.register');
    }
}


?>