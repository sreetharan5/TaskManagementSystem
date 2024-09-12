<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->get('/home', 'AuthController::home');
$routes->get('/profile', 'AuthController::profile', ['filter' => 'auth']);


$routes->get('/profile', 'AuthController::profile');
$routes->post('/register','AuthController::process_register');
$routes->post('/login', 'AuthController::process_login');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/newtask', 'TaskController::NewTask');
$routes->get('/dashboard', 'TaskController::dashboard');
$routes->post('/process_newtask','TaskController::process_newtask');

