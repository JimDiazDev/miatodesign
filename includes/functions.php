<?php

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCTIONS_URL', __DIR__ . 'functions.php');
define('FOLDER_IMAGE', $_SERVER['DOCUMENT_ROOT'] . "/images/");

function includeTemplate( string $name ) {
    include TEMPLATES_URL . "/{$name}.php";
}

function authenticated() {
    session_start();

    if(!$_SESSION['login']) {
        header('Location: /');
    }

}

function deb ($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    exit;
}

// Escapes the HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function redirect(string $url) {
    $id = filter_var( $_GET['id'], FILTER_VALIDATE_INT);

    if(!$id) {
        header("Location: {$url}");
    }
    
    return $id;
}