<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Routing Dashboard
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->post('/processLogin', 'AuthController::processLogin');
$routes->get('/logout', 'AuthController::logout');

//Routing Donasi
$routes->get('donasi', 'donasi::index');

//Routing profil
$routes->get('profil', 'profil::index');
