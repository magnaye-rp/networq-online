<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');

service('auth')->routes($routes);
$routes->group('admin', function (RouteCollection $routes) {
    $routes->get('/', 'Admin::index');
    $routes->post('create', 'Admin::create');
    $routes->post('delete/(:num)', 'Admin::delete/$1');
    $routes->post('createCertificate', 'Admin::createCertificate');
    $routes->post('deleteCertificate/(:num)', 'Admin::deleteCertificate/$1');

});

$routes->post('contact/send', 'Contact::sendMessage');


