<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('images/(:segment)', 'Home::image/$1');

service('auth')->routes($routes);

// Admin Routes
$routes->group('admin', ['filter' => 'group:admin,superadmin,developer'], function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');

    // databuku
    $routes->get('databuku', 'AdminController::databuku');
    $routes->post('databuku', 'AdminController::tambah_buku');
    $routes->get('databuku/(:segment)/edit', 'AdminController::edit_buku/$1');
    $routes->post('databuku/(:segment)/update', 'AdminController::update_buku/$1');
    $routes->get('databuku/(:segment)/delete', 'AdminController::delete_buku/$1');

    // pinjambuku
    $routes->get('pinjambuku', 'AdminController::pinjambuku');
    $routes->post('pinjambuku', 'AdminController::pinjam_buku');
    $routes->get('pinjambuku/(:segment)/edit', 'AdminController::edit_pinjam_buku/$1');
    $routes->post('pinjambuku/(:segment)/update', 'AdminController::update_pinjam_buku/$1');
    $routes->get('pinjambuku/(:segment)/delete', 'AdminController::delete_pinjam/$1');

    $routes->get('home', 'Home::index');
});


