<?php

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->post('/cadastrar', 'Home::cadastrar');
$routes->get('/excluir/(:num)', 'Home::excluir/$1');
$routes->get('/listar', 'Home::listar');
$routes->get('/', 'Home::index');
