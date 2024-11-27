<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('dashboard', 'Dashboard::index');
$routes->post('savePeserta', 'Dashboard::savePeserta');
$routes->get('detailPeserta/(:num)', 'Dashboard::detailPeserta/$1');
