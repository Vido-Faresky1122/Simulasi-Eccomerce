<?php
namespace App\Controller;

require_once '../app/core/Controller.php';

use App\Core\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $this->view('products.products');
    }

    public function create()
    {
        $this->view('products.create');
    }

    public function show(string $id)
    {
        $this->view('products.show');
    }

}


?>