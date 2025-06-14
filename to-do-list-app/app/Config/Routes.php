<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ToDoList::index'); //untuk akses index
$routes->post('tasks/toggle/(:num)', 'ToDoList::toggleStatus/$1'); //untuk memproses ceklis task
$routes->post('tasks/delete/(:num)', 'ToDoList::delete/$1'); //untuk delete task
$routes->post('tasks/add', 'ToDoList::add');
