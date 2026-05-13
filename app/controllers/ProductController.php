<?php
namespace App\Controller;

require_once '../app/core/Controller.php';
require_once '../app/models/Product.php';

use App\Core\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $this->auth();
        $productModel = new Product();
        $products = $productModel->getProducts();
        $this->view('products.products', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $this->auth();
        $this->view('products.create');
    }

    public function show(string $id)
    {
        $this->auth();
        $productModel = new Product();
        $product = $productModel->getProduct($id);
        $this->view('products.show', [
            'product' => $product
        ]);
    }

}


?>