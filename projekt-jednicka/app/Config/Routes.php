<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('page2','Main::page2');
$routes->get('prv','Main::prv');
$routes->get('index1','Main::index1');
$routes->get('index2','Main::index2');
$routes->get('index3','Main::index3');
$routes->get('index4','Main::index4');

