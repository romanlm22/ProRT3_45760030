<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal_ultimo', 'Home::index');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
$routes->get('alpha_romero', 'Home::alpha_romero');
$routes->get('alpha_tauri', 'Home::alpha_tauri');


$routes->get('/registro', 'usuario_controler::create');
$routes->post('/enviar-form', 'usuario_controler::formValidation');


$routes->get('/login', 'login_controler');
$routes->post('/enviarlogin', 'login_controler::auth'  );    
$routes->get('/panel', 'Panel_Controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controler::logout');


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}