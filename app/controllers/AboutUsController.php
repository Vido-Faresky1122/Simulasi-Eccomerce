<?php
namespace App\Controller;
require_once '../app/core/Controller.php';

use App\Core\Controller;
class AboutUsController extends Controller
{

    public function aboutus()
    {
        $this->view('AboutUs');
    }

}


?>