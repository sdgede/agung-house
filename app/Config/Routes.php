<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// Untuk Enable Akses Lewat URL
$routes->setAutoRoute(true);