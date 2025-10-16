<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/gradient-sample', 'Home::gradientSample');
$routes->get('/generate-sitemap', 'Sitemap::generate');

