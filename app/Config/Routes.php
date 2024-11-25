<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/rooms', 'Home::room_detail');
$routes->post('/save', 'Home::save');
$routes->post('/bokingd', 'Home::bokingd');
$routes->post('/simpan', 'Home::simpan');




// Untuk Enable Akses Lewat URL
$routes->setAutoRoute(true);