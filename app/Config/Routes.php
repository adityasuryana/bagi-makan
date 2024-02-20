<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Routing Welcome
$routes->get('/welcome', 'Welcome::index');

//Routing Dashboard
$routes->get('/', 'Home::index', ['filter' => 'login']);

//Routing Donasi
$routes->get('/donasi', 'Donasi::index', ['filter' => 'login']);

//Routing profil
$routes->get('/profil', 'Profil::index',['filter' => 'login']);

//Routing Donasi
$routes->get('/riwayat', 'Riwayat::index', ['filter' => 'login']);