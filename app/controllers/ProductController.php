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

    public function createView()
    {
        $this->auth();
        $this->view('products.create');
    }

    public function createPost()
    {
        $productModel = new Product();
        $productModel->insert($_POST);
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

    public function uploadPhoto()
    {
        session_start();
        if (isset($_FILES['image'])) {
            $file = $_FILES['image'];
            if ($file['error'] == 0) {
                $fileName = time() . '_' . $file['name'];
                $uploadPath = dirname(__DIR__, 2) . '/public/assets/' . $fileName;
                move_uploaded_file(
                    $file['tmp_name'],
                    $uploadPath
                );
                $_SESSION['image'] = '/assets/' . $fileName;
                header('Location: /products/create');
                exit;
            }
        }
    }

    public function destroy($id)
    {
        session_start();
        $this->auth();
        if ($_SESSION['role'] !== 'admin') {

            header('Location: /');

            exit;
        }
        $productModel = new Product();
        $productModel->destroy($id);
        header('Location: /admin/profile');
        exit;
    }

}


?>