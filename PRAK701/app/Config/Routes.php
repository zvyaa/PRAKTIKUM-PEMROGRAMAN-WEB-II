<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'AuthController::login');

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::loginProcess');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/buku', 'BukuController::index');
$routes->get('/buku/create', 'BukuController::create');
$routes->post('/buku/store', 'BukuController::store');
$routes->get('/buku/edit/(:num)', 'BukuController::edit/$1');
$routes->post('/buku/update/(:num)', 'BukuController::update/$1');
$routes->get('/buku/delete/(:num)', 'BukuController::delete/$1');
$routes->get('/buku/show/(:num)', 'BukuController::show/$1');
$routes->get('/debug-login', 'AuthController::debugLogin');