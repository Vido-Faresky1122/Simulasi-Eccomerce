<?php
namespace App\Controller;

class PageController
{

    public function index()
    {
        require_once '../app/views/landing/landing.php';
    }

    public function login()
    {
        require_once '../app/views/account/login.php';
    }

    public function register()
    {
        require_once '../app/views/account/register.php';
    }
}


?>