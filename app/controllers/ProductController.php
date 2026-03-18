<?php
namespace App\Controller;

class ProductController
{
    public function index()
    {
        require_once '../app/views/products/products.php';
    }

    public function create()
    {
        require_once '../app/views/products/create.php';
    }

        public function show(string $id)
    {
        require_once '../app/views/products/show.php';
    }

}


?>