<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ToDoList::index'); 
$routes->post('tasks/toggle/(:num)', 'ToDoList::toggleStatus/$1');
$routes->post('tasks/delete/(:num)', 'ToDoList::delete/$1');
