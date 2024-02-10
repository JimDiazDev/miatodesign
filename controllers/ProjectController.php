<?php

namespace Controllers;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Property;

class ProjectController {

    public static function index(Router $router) {

        $property = Property::all();
        $result = $_GET['result'] ?? NULL;

        $router->render('properties/admin', [
            "property" => $property,
            "result" => $result
        ]);
    }

    public static function create(Router $router) {

        $property = new Property;
        $bugs = Property::getBugs();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $property = new Property($_POST['property']);
            $bugs = $property->validate();
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
                $images = ['planOne', 'planTwo', 'planThree', 'planFour', 'planFive', 'modelOne', 'modelTwo', 'modelThree', 'modelFour', 'modelFive', 'renderingOne', 'renderingTwo', 'renderingThree', 'renderingFour', 'renderingFive'];
                foreach($images as $img) {
                    if(isset($_FILES[$img]) && $_FILES[$img]['error'] === UPLOAD_ERR_OK) {
                        $property->setImage($img, uploadImage($_FILES[$img]));
                    }
                }
                $property->save();
            }
        }
        $router->render('properties/create', [
            "property" => $property,
            "bugs" => $bugs
        ]);
    }

    public static function updateProject(Router $router) {

        $id = redirect('/admin');
        $property = Property::find($id);
        $bugs = Property::getBugs();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $args = $_POST['property'];
            $property->synchronize($args);
            $bugs = $property->validate();
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
                $images = ['planOne', 'planTwo', 'planThree', 'planFour', 'planFive', 'modelOne', 'modelTwo', 'modelThree', 'modelFour', 'modelFive', 'renderingOne', 'renderingTwo', 'renderingThree', 'renderingFour', 'renderingFive'];
                foreach($images as $img) {
                    if(isset($_FILES[$img]) && $_FILES[$img]['error'] === UPLOAD_ERR_OK) {
                        $property->setImage($img, uploadImage($_FILES[$img]));
                    }
                }
                $property->save();
            }
        }
        $router->render('properties/project', [
            'property' => $property,
            'bugs' => $bugs
        ]);
    }

    public static function delete() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = filter_var( $_POST['id'], FILTER_VALIDATE_INT );

            if($id) {
                $property = Property::find($id);
                $images = ['planOne', 'planTwo', 'planThree', 'planFour', 'planFive', 'modelOne', 'modelTwo', 'modelThree', 'modelFour', 'modelFive', 'renderingOne', 'renderingTwo', 'renderingThree', 'renderingFour', 'renderingFive'];
                foreach ($images as $img) {
                    $property->deleteImage($img);
                }
                $property->delete();
            }
        }
    }
}