<?php
namespace App\Controller;

class AuthController
{
    public function login()
    {
        require_once '../app/views/users/login.php';
    }

    public function register()
    {
        require_once '../app/views/users/register.php';
    }
}


?>