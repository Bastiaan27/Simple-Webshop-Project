<?php
class ArrayRouter {
    public function route($uri) {
        // defining routes
        $routes = array(
            'home' => array(
                'controller' => 'homecontroller',
                'method' => 'index'
            ),
            'about' => array(
                'controller' => 'homecontroller',
                'method' => 'about'
            ),
            'login' => array(
                'controller' => 'logincontroller',
                'method' => 'index'
            ),
            'register' => array(
                'controller' => 'registercontroller',
                'method' => 'index'
            ),
            'cart' => array(
                'controller' => 'cartcontroller',
                'method' => 'index'
            ),
        );

        // deal with undefined paths first
        if(!isset($routes[$uri]['controller']) || !isset($routes[$uri]['method'])) {
            http_response_code(404);
            die();
        }

        // dynamically instantiate controller and method
        $controller = $routes[$uri]['controller'];
        $method = $routes[$uri]['method'];

        require __DIR__ . '/controllers/' . $controller . '.php';
        $controllerObj = new $controller;
        $controllerObj->$method();
    }
}
?>