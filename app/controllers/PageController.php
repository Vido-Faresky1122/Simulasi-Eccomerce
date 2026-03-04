<?php
namespace App\Controller;

class PageController
{

    public function index()
    {
        require_once '../app/views/landing/landing.php';
    }

    public function create()
    {
        require_once '../app/views/students/create.php';
    }

    public function show(string $id)
    {
        require_once '../app/views/students/show.php';
    }
}


?>