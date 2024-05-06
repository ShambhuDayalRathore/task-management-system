<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'SigninController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/signout', 'SigninController::signout');
$routes->get('/profile', 'ProfileController::index', ['filter' => 'authGuard']);
$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'authGuard']);
$routes->get('/taskboard', 'TaskBoardController::index', ['filter' => 'authGuard']);
$routes->get('/addTask', 'TaskBoardController::addtask', ['filter' => 'authGuard']);
$routes->match(['get', 'post'], 'TaskBoardController/store', 'TaskBoardController::store', ['filter' => 'authGuard']);
$routes->get('/edittask/(:segment)', 'TaskBoardController::edittask/$1', ['filter' => 'authGuard']);
$routes->get('/deletetask/(:segment)', 'TaskBoardController::deletetask/$1', ['filter' => 'authGuard']);
$routes->match(['get', 'post'], 'TaskBoardController/update', 'TaskBoardController::update', ['filter' => 'authGuard']);
$routes->get('/UserList', 'UserController::index', ['filter' => 'authGuard']);
$routes->get('/assigntask', 'TaskBoardController::assigntask', ['filter' => 'authGuard']);



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
