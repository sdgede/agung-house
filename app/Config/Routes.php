<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/rooms', 'Home::room_detail');
$routes->post('/save', 'Home::save');




// Untuk Enable Akses Lewat URL
$routes->setAutoRoute(true);