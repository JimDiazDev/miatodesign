<?php

namespace Controllers;

use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Home;
use Model\Portfolio;
use Model\Services;
use Model\Contact;

class PagesController {

    public static function Home(Router $router) {

        $id = redirect('/admin');
        $home = Home::find($id);
        $bugs = Home::getBugs();

        $router->render('properties/home', [
            "home" => $home,
            "bugs" => $bugs
        ]);
    }

    public static function updateHome(Router $router) {
        $id = redirect('/admin');
        $home = Home::find($id);
        $bugs = Home::getBugs();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $args = $_POST;
            $home->synchronize($args);
            $bugs = $home->validate();
            if(empty($bugs)) {
                function uploadImage( array $imageData ) {
                    if(!is_dir(FOLDER_IMAGE)) {
                    mkdir(FOLDER_IMAGE);
                    }
                    $imageName = md5(uniqid(rand(), true)) . ".jpg";
                    $image = Image::make($imageData['tmp_name'])->resize(2000, 2000, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                    $image->save(FOLDER_IMAGE . $imageName);
                    return $imageName;
                }
                $images = ['imgAbout', 'sliderOne', 'sliderTwo', 'sliderThree', 'sliderFour', 'sliderFive'];
                foreach($images as $img) {
                    if(isset($_FILES[$img]) && $_FILES[$img]['error'] === UPLOAD_ERR_OK) {
                        $home->setImage($img, uploadImage($_FILES[$img]));
                    }
                }
                $home->save();
            }
        }
        $router->render('properties/home', [
            'home' => $home,
            'bugs' => $bugs
        ]);
    }

    public static function portfolio(Router $router) {
        $id = redirect('/admin');
        $portfolio = Portfolio::find($id);
        $bugs = Portfolio::getBugs();

        $router->render('properties/portfolio', [
            "portfolio" => $portfolio,
            "bugs" => $bugs
        ]);
    }

    public static function updatePortfolio(Router $router) {
        $id = redirect('/admin');
        $portfolio = Portfolio::find($id);
        $bugs = Portfolio::getBugs();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $args = $_POST;
            $portfolio->synchronize($args);
            $bugs = $portfolio->validate();
            if(empty($bugs)) {
                function uploadImage( array $imageData ) {
                    if(!is_dir(FOLDER_IMAGE)) {
                    mkdir(FOLDER_IMAGE);
                    }
                    $imageName = md5(uniqid(rand(), true)) . ".jpg";
                    $image = Image::make($imageData['tmp_name'])->resize(2000, 2000, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                    $image->save(FOLDER_IMAGE . $imageName);
                    return $imageName;
                }
                $images = ['imgOne', 'imgTwo'];
                foreach($images as $img) {
                    if(isset($_FILES[$img]) && $_FILES[$img]['error'] === UPLOAD_ERR_OK) {
                        $portfolio->setImage($img, uploadImage($_FILES[$img]));
                    }
                }
                $portfolio->save();
            }
        }

        $router->render('properties/portfolio', [
            "portfolio" => $portfolio,
            "bugs" => $bugs
        ]);
        
    }

    public static function services(Router $router) {
        $id = redirect('/admin');
        $services = Services::find($id);
        $bugs = Services::getBugs();

        $router->render('properties/services', [
            "services" => $services,
            "bugs" => $bugs
        ]);
    }

    public static function updateServices(Router $router) {
        $id = redirect('/admin');
        $services = Services::find($id);
        $bugs = Services::getBugs();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $args = $_POST;
            $services->synchronize($args);
            $bugs = $services->validate();
            if(empty($bugs)) {
                function uploadImage( array $imageData ) {
                    if(!is_dir(FOLDER_IMAGE)) {
                    mkdir(FOLDER_IMAGE);
                    }
                    $imageName = md5(uniqid(rand(), true)) . ".jpg";
                    $image = Image::make($imageData['tmp_name'])->resize(2000, 2000, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                    $image->save(FOLDER_IMAGE . $imageName);
                    return $imageName;
                }
                $images = ['imageOne', 'imageTwo', 'imageThree', 'imageFour'];
                foreach($images as $img) {
                    if(isset($_FILES[$img]) && $_FILES[$img]['error'] === UPLOAD_ERR_OK) {
                        $services->setImage($img, uploadImage($_FILES[$img]));
                    }
                }
                $services->save();
            }
        }

        $router->render('properties/services', [
            "services" => $services,
            "bugs" => $bugs
        ]);
        
    }

    public static function contact(Router $router) {
        $id = redirect('/admin');
        $contact = Contact::find($id);
        $bugs = Contact::getBugs();

        $router->render('properties/contact', [
            "contact" => $contact,
            "bugs" => $bugs
        ]);
    }

    public static function updateContact(Router $router) {
        $id = redirect('/admin');
        $contact = Contact::find($id);
        $bugs = Contact::getBugs();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $args = $_POST;
            $contact->synchronize($args);
            $bugs = $contact->validate();
            if(empty($bugs)) {
                $contact->save();
            }
        }

        $router->render('properties/contact', [
            "contact" => $contact,
            "bugs" => $bugs
        ]);
        
    }   
}