<?php
namespace App\Controller;
require_once '../app/core/Controller.php';
require_once '../app/models/User.php';

use App\Core\Controller;
use App\Models\User;

class AuthController extends Controller
{
    public function loginView()
    {
        $this->view('users.login');
    }

    public function registerView()
    {
        $this->view('users.register');
    }

    public function registerPost()
    {
        $studentModel = new User();
        $studentModel->insert($_POST);
    }

    public function loginPost()
    {
        $studentModel = new User();
        $studentModel->select($_POST);
    }
}


?>