<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/login','User::login');
$routes->get('/menu','Menu::index');
$routes->get('/about','About::index');
$routes->get('/register','Menu::index');
$routes->group('user',['filter' => 'auth'], function($routes){
    $routes->get('dashboard','User::dashboard');
    $routes->add('logout','User::logout');
});
$routes->setAutoRoute(true);