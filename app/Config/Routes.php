<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/room_detail', 'Home::room');


// Untuk Enable Akses Lewat URL
$routes->setAutoRoute(true);