<?php

namespace Controllers;
use MVC\Router;
use Model\Property;
use Model\Home;
use Model\Portfolio;
use Model\Services;
use Model\Contact;


class PublicController {

    public static function viewIndex(Router $router) {
        $home = Home::all();
        $home = $home[0];
        $router->render('pages/index', [
            "home" => $home
        ]);
    }

    public static function viewPortfolio(Router $router) {
        $portfolio = Portfolio::all();
        $portfolio = $portfolio[0];
        $property = Property::all();
        $router->render('pages/portfolio', [
            "portfolio" => $portfolio,
            "property" => $property
        ]);
    }

    public static function viewServices(Router $router) {
        $services = Services::all();
        $services = $services[0];
        $router->render('pages/services', [
            "services" => $services
        ]);
    }

    public static function viewContact(Router $router) {
        $contact = Contact::all();
        $contact = $contact[0];
        $router->render('pages/contact', [
            "contact" => $contact
        ]);
    }

    public static function viewComercial(Router $router) {
        $property = Property::all();
        $router->render('pages/comercial', [
            "property" => $property
        ]);
    }

    public static function viewResidential(Router $router) {
        $property = Property::all();
        $router->render('pages/residential', [
            "property" => $property
        ]);
    }

    public static function viewProject(Router $router) {
        $id = redirect('/');
        $property = Property::find($id);
        $router->render('pages/project', [
            "project" => $property
        ]);
    }



}