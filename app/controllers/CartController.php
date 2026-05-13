<?php
namespace App\Controller;
require_once '../app/core/Controller.php';

use App\Core\Controller;
class CartController extends Controller
{

    public function cart()
    {
        $this->auth();
        $this->view('cart');
    }

}


?>