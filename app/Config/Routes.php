<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
//$routes->get('/', 'Home::index');
$routes->get('/karyawan', 'Karyawan::index');

$routes->get('/karyawan/create', 'Karyawan::create');
$routes->post('/karyawan/store', 'Karyawan::store');

$routes->get('/karyawan/edit/(:num)', 'Karyawan::edit/$1');
$routes->post('/karyawan/update/(:num)', 'Karyawan::update/$1');

$routes->get('/karyawan/delete/(:num)', 'Karyawan::delete/$1');
$routes->get('/login', 'Auth::index');
$routes->post('/cek-login', 'Auth::cekLogin');
$routes->get('/logout', 'Auth::logout');