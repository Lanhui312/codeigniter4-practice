<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// General routes
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('home/validation', 'Home::validation');

// Shop routes
$routes->get('shop', 'Shop::index');
$routes->get('shop/product/(:any)', 'Shop::product/$1');

// Admin routes
$routes->get('admin/shop', 'Admin\Shop::index');
$routes->get('admin/shop/product/(:any)/(:num)', 'Admin\Shop::product/$1/$2');