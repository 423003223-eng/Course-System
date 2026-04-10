<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/courses', 'CourseController::index');
$routes->get('/courses/create', 'CourseController::create');
$routes->post('/courses/store', 'CourseController::store');
$routes->get('/courses/edit/(:num)', 'CourseController::edit/$1');
$routes->post('/courses/update/(:num)', 'CourseController::update/$1');
$routes->get('/courses/delete/(:num)', 'CourseController::delete/$1');