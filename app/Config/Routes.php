<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('/', ['namespace' => 'App\Controllers\Front'], function ($routes) {
    $routes->get('', 'Home::index');
    $routes->get('login', 'Home::login');
    $routes->post('data_login', 'Home::data_login');
    $routes->post('r_admin', 'Home::registrar_usuario_admin');
    $routes->get('LICENSE', 'Home::licencia');
});
$routes->group('/admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('/', 'CStarter::index');
    $routes->get('usuarios', 'CUsuario::usuarios', ['as' => 'usuarios']);
    $routes->get('rusuarios', 'CUsuario::rusuarios');
    $routes->post('registro_u', 'CUsuario::registro_u');
    $routes->get('salir', 'CUsuario::salir');
    //url par temporadas
    $routes->get('temporadas', 'CTemporadas::index');
    //url para ligas
    $routes->get('liga', 'CLigas::index', ['as' => 'VLigas']);
    $routes->post('registro_l', 'CLigas::registrar_liga');

    //VRegistro_usuario
});