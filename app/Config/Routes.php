<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/clima/getclima','ClimaController::getClima');
$routes->get('/ciudades/getciudades','CiudadController::getCiudades');
