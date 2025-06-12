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
$routes->group('admin', function ($routes) {
    // Admin home
    $routes->get('/', 'Admin\Home::index');

    // Admin users
    $routes->get('user', 'Admin\Users::index');
    $routes->get('users', 'Admin\Users::getAllUser');

    // Admin shop
    $routes->get('shop', 'Admin\Shop::index');
    $routes->get('shop/product/(:any)/(:any)', 'Admin\Shop::product/$1/$2');

    // Admin blog
    $routes->get('blog', 'Admin\Blog::index');
    $routes->get('blog/create', 'Admin\Blog::create');
    $routes->post('blog/create', 'Admin\Blog::save');
});

// Additional routes
$routes->get('blog', 'Blog::index');
$routes->get('blog/create', 'Blog::create');
$routes->post('blog/create', 'Blog::save');