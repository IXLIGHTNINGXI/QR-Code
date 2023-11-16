<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('QR-home', 'Home::index');
$routes->get('SD-page', 'Home::pagesd');
$routes->get('3D-page', 'Home::page3d');
$routes->get('3DSD-page', 'Home::page3dsd');
$routes->get('Cad-cam', 'Home::pagecadcam');
$routes->get('Log-in','Login::login_view');
