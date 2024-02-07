<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\ProjectController;
use Controllers\PagesController;
use Controllers\PublicController;
use Controllers\LoginController;
use Controllers\LanguageController;

$router = new Router();

// Private
$router->get('/admin', [ProjectController::class, 'index']);
$router->get('/properties/create', [ProjectController::class, 'create']);
$router->post('/properties/create', [ProjectController::class, 'create']);
$router->get('/properties/project', [ProjectController::class, 'updateProject']);
$router->post('/properties/project', [ProjectController::class, 'updateProject']);
$router->post('/properties/delete', [ProjectController::class, 'delete']);

$router->get('/properties/home', [PagesController::class, 'home']);
$router->post('/properties/home', [PagesController::class, 'updateHome']);

$router->get('/properties/portfolio', [PagesController::class, 'portfolio']);
$router->post('/properties/portfolio', [PagesController::class, 'updatePortfolio']);

$router->get('/properties/services', [PagesController::class, 'services']);
$router->post('/properties/services', [PagesController::class, 'updateServices']);

$router->get('/properties/contact', [PagesController::class, 'contact']);
$router->post('/properties/contact', [PagesController::class, 'updatecontact']);

// Public
$router->get('/', [PublicController::class, 'viewIndex']);
$router->get('/portfolio', [PublicController::class, 'viewPortfolio']);
$router->get('/services', [PublicController::class, 'viewServices']);
$router->get('/contact', [PublicController::class, 'viewContact']);

$router->get('/comercial', [PublicController::class, 'viewComercial']);
$router->get('/residential', [PublicController::class, 'viewResidential']);
$router->get('/project', [PublicController::class, 'viewProject']);

// Login
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Language
$router->get('/english', [LanguageController::class, 'english']);
$router->get('/español', [LanguageController::class, 'español']);

$router->checkRoutes();