<?php
namespace App\Controller;
require_once '../app/core/Controller.php';
require_once '../app/models/User.php';
require_once '../app/models/Product.php';

use App\Core\Controller;
use App\Models\User;
use App\Models\Product;

class UserController extends Controller
{
    public function show($id)
    {
        session_start();
        $this->auth();
        $userModel = new User();
        if ($_SESSION['role'] === 'admin') {
            $user = $userModel->getUser($id);
        } else {
            if ($_SESSION['user_id'] != $id) {
                header('Location: /');
                exit;
            }
            $user = $userModel->getUser($_SESSION['user_id']);
        }

        $this->view('users.show', [
            'user' => $user
        ]);
    }

    public function showAdmin()
    {
        $this->auth();
        if ($_SESSION['role'] !== 'admin') {
            header('Location: /');
            exit;
        }
        $userModel = new User();
        $user = $userModel->getUser($_SESSION['user_id']);
        $productModel = new Product();
        $products = $productModel->getAll();
        $this->view('users.showAdmin', [
            'user' => $user,
            'products' => $products
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
                move_uploaded_file($file['tmp_name'], $uploadPath);
                $userModel = new User();
                $userModel->updatePhoto($_SESSION['user_id'], $fileName);
                header('Location: /users/show/' . $_SESSION['user_id']);
                exit;
            }
        }
    }
}


?>