<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/clima/getclima','ClimaController::getClima');
$routes->get('/ciudades/getciudades','CiudadController::getCiudades');
$routes->get('/ciudades/respuesta','CiudadController::respuesta');


$routes->post('/ciudades/postciudad','CiudadController::postCiudad');
