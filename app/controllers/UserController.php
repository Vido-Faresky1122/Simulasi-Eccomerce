<?php
namespace App\Controller;

class UserController
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