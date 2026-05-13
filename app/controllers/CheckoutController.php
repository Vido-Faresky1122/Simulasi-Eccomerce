<?php
namespace App\Controller;
require_once '../app/core/Controller.php';

use App\Core\Controller;
class CheckoutController extends Controller
{

    public function checkout()
    {
        $this->auth();
        $this->view('checkout');
    }

}


?>