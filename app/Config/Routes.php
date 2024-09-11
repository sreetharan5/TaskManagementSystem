<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/login', 'AuthController::index');
$routes->get('/register', 'AuthController::register');
$routes->get('/home', 'AuthController::home');
$routes->get('/dashboard', 'AuthController::dashboard');
$routes->get('/newtask', 'AuthController::newtask');
$routes->get('/profile', 'AuthController::profile');