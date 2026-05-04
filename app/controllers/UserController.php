<?php
namespace App\Controller;
require_once '../app/core/Controller.php';
require_once '../app/models/User.php';

use App\Core\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function show()
    {
        $this->view('users.show');
    }

        public function showAdmin()
    {
        $this->view('users.showAdmin');
    }
}


?>