<?php
namespace App\Controller;
require_once '../app/core/Controller.php';
require_once '../app/models/User.php';

use App\Core\Controller;
use App\Models\User;

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
        $this->view('users.showAdmin', [
            'user' => $user
        ]);
    }
}


?>