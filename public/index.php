<?php 
    require_once '../app/core/Router.php';
    use App\Core\Router;

    $router = new Router();
    $router->add('GET', '/login', 'PageController', 'login');
    $router->add('GET', '/register', 'PageController', 'create');
    $router->add('GET', '/students/{id}', 'PageController', 'show');
    $router->run();
?>
