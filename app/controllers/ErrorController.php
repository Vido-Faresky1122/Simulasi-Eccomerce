<?php
namespace App\Controller;
require_once '../app/core/Controller.php';

use App\Core\Controller;

class ErrorController extends Controller
{

    public function index()
    {
        $this->view('error');
    }

}


?>