<?php 
    require_once '../app/core/Router.php';
    use App\Core\Router;

    $router = new Router();

    //Users Management
    $router->add('GET', '/users/login', 'UserController', 'login');
    $router->add('GET', '/users/register', 'UserController', 'register');

    // Route
    $router->add('GET', '/cart', 'CartController', 'cart');

    //Products Management
    $router->add('GET', '/products', 'ProductController', 'index');
    $router->add('GET', '/products/create', 'ProductController', 'create');
    $router->add('GET', '/products/{id}', 'ProductController', 'show');

    $router->add('GET', '/', 'LandingController', 'index');
    
    $router->run();
?>
