<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'CardController::card1');
$routes->get('/card1', 'CardController::card1');
$routes->get('/card2', 'CardController::card2');
$routes->get('/card3', 'CardController::card3');
