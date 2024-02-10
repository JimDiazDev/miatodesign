<?php

namespace MVC;

class Router {

    public $routesGET = [];
    public $routesPOST = [];

    public function get($url, $fn) {
        $this->routesGET[$url] = $fn;
    }

    public function post($url, $fn) {
        $this->routesPOST[$url] = $fn;
    }
    
    public function checkRoutes() {
        session_start();
        $auth = $_SESSION['login'] ?? NULL;

        // Protected Routes
        $protectedRoutes = ['/admin', '/properties/create', '/properties/project', '/properties/delete', '/properties/home', '/properties/portfolio', '/properties/services', '/properties/contact'];

        $urlCurrent = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if($method === 'GET') {
            $fn = $this->routesGET[$urlCurrent] ?? NULL;
        } else {
            $fn = $this->routesPOST[$urlCurrent] ?? NULL;
        }

        // Protect the Routes
        if(in_array($urlCurrent, $protectedRoutes) && !$auth) {
            header('Location: /');
        }

        if($fn) {
            call_user_func($fn, $this);
        } else {
            echo "not pages";
        }
    }

    public function render($view, $data = []) {

        foreach($data as $key => $value) {
            $$key = $value;
        }

        ob_start();
        include __DIR__ . "/views/$view.php";
        $content = ob_get_clean();

        include __DIR__ . "/views/layout.php";
    }
}
