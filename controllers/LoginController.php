<?php

namespace Controllers;
use MVC\Router;
use Model\Admin;

class LoginController {

    public static function login(Router $router) {
        $bugs = [];
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Admin($_POST);
            $bugs = $auth->validate();

            if(empty($bugs)) {
                $result = $auth->userExists();

                if(!$result) {
                    $bugs = Admin::getBugs();
                } else {
                    $authenticated = $auth->checkPassword($result);

                    if($authenticated) {
                        $auth->authentify();
                    } else {
                        $bugs = Admin::getBugs();
                    }
                }
            }
        }

        $router->render('auth/login', [
            "bugs" => $bugs
        ]);
    }

    public static function logout() {
        session_start();

        unset($_SESSION['user']);
        unset($_SESSION['login']);

        header('Location: /');
    }
}