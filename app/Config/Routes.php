<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Routing Welcome
$routes->get('/', 'Welcome::index');

//Routing Dashboard
$routes->get('/home', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->post('/processLogin', 'AuthController::processLogin');
$routes->get('/logout', 'AuthController::logout');

//Routing Donasi
$routes->get('donasi', 'donasi::index');

//Routing profil
$routes->get('profil', 'profil::index');

//Routing Donasi
$routes->get('riwayat', 'riwayat::index');