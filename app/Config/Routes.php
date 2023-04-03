<?php

namespace Config;

$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */

 
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('/', 'Home::home');
$routes->get('form/', 'Home::index');

$routes->get('upload', 'Upload::index');          // Add this line.
$routes->post('upload/upload', 'Upload::upload'); // Add this line.

$routes->post('save/','Home::save');

// Admin Login
$routes->get('auth/','AuthSuperAdmin::index');

$routes->get('auth/logout','AuthSuperAdmin::logout');
$routes->post('auth/check','AuthSuperAdmin::checkAdmin');


// Operator Login
$routes->get('operator/auth/','OperatorAuth::index');

$routes->get('operator/auth/logout/','OperatorAuth::logout');
$routes->post('operator/auth/check/','OperatorAuth::check');

$route['upload'] = 'Upload';

$routes->group('',['filter' => 'AuthCheck'],function($routes){
    $routes->get('admin/', 'Admin::index');
    $routes->get('admin/operators/', 'Admin::operators');
    $routes->get('admin/reports/', 'Admin::reports');
});

$routes->group('',['filter' => 'AuthOperatorCheck'],function($routes){
    $routes->get('operator/', 'Operator::index');
    $routes->get('operator/reports','Operator::reports');
    $routes->post('operator/update_status','Operator::update_status');

});



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}