<?php
namespace App\Controller;

require_once '../app/core/Controller.php';

use App\Core\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $this->auth();
        $this->view('products.products');
    }

    public function create()
    {
        $this->auth();
        $this->view('products.create');
    }

    public function show(string $id)
    {
        $this->auth();
        $this->view('products.show');
    }

}


?>