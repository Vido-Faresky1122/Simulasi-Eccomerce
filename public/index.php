<?php 
    require_once '../app/core/Router.php';
    use App\Core\Router;

    $router = new Router();

    //Auth Management
    $router->add('GET', '/login', 'AuthController', 'loginView');
    $router->add('GET', '/register', 'AuthController', 'registerView');
    $router->add('POST', '/login', 'AuthController', 'loginPost');
    $router->add('POST', '/register', 'AuthController', 'registerPost');
    
    //Users Management
    $router->add('GET', '/users/{id}', 'UserController', 'show');
    $router->add('GET', '/users/{id}/a', 'UserController', 'showAdmin');
    
    // Route
    $router->add('GET', '/cart', 'CartController', 'cart');
    $router->add('GET', '/checkout', 'CheckoutController', 'checkout');


    //Products Management
    $router->add('GET', '/products', 'ProductController', 'index');
    $router->add('GET', '/products/create', 'ProductController', 'create');
    $router->add('GET', '/products/{id}', 'ProductController', 'show');

    $router->add('GET', '/', 'LandingController', 'index');
    
    $router->run();
?>
