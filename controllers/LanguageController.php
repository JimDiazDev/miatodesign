<?php

namespace Controllers;

class LanguageController {

    public static function english() {
        $_SESSION['language'] = 'en';
        $previousPage = $_SERVER['HTTP_REFERER'] ?? '/';
        header('Location: ' . $previousPage);
        exit;
    }

    public static function español() {
        $_SESSION['language'] = 'es';        
        $previousPage = $_SERVER['HTTP_REFERER'] ?? '/';
        header('Location: ' . $previousPage);
        exit;
    }
}