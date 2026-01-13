<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Shield\Controllers\LoginController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');

service('auth')->routes($routes, [
    'except' => ['login', 'register', 'activate', 'forgot', 'reset'],
]);

$routes->get('loginako', [LoginController::class, 'loginView']);
$routes->post('login', [LoginController::class, 'loginAction']);

$routes->group('admin', function (RouteCollection $routes) {
    $routes->get('/', 'Admin::index');
    $routes->post('create', 'Admin::create');
    $routes->get('edit/(:num)', 'Admin::edit/$1');
    $routes->post('update/(:num)', 'Admin::update/$1');
    $routes->post('delete/(:num)', 'Admin::delete/$1');
    $routes->post('deleteImage/(:num)', 'Admin::deleteImage/$1');
    $routes->post('createCertificate', 'Admin::createCertificate');
    $routes->post('deleteCertificate/(:num)', 'Admin::deleteCertificate/$1');
    $routes->post('updateProfilePic', 'Admin::updateProfilePic');
});

$routes->post('contact/send', 'Contact::sendMessage');


