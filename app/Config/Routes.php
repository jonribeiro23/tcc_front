<?php

namespace Config;

// Create a new instance of our RouteCollection class.
use App\Controllers\Dashboard;

$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Home
$routes->get('/', 'Home::index');
$routes->get('about-us', 'Home::aboutUs');
$routes->get('faq', 'Home::faq');
$routes->get('contact', 'Home::contact');
$routes->match(['get', 'post'], 'cadastrar', 'Home::subscribe');

//User
$routes->post('logar', 'User::login');
$routes->get('logout', 'User::logout');
$routes->post('editar-dados', 'User::editar', ['filter' => 'auth']);
$routes->get('perfil/(:any)', 'User::profile/$1', ['filter' => 'auth']);

//Dashboard
$routes->get('home', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('pessoas', 'Dashboard::searchPeople', ['filter' => 'auth']);
$routes->get('amigos', 'Dashboard::friends', ['filter' => 'auth']);
$routes->post('buscar', 'Dashboard::search', ['filter' => 'auth']);
$routes->get('see-more/(:any)', 'Dashboard::seeMore/$1', ['filter' => 'auth']);

//Courses
$routes->get('cursos', 'Courses::courses', ['filter' => 'auth']);
$routes->get('curso/aulas', 'Courses::classes', ['filter' => 'auth']);
$routes->get('curso/(:any)', 'Courses::getCurso/$1', ['filter' => 'auth']);
$routes->post('criar-curso', 'Courses::criarCurso', ['filter' => 'auth']);
$routes->post('criar-aula/(:any)', 'Courses::criarAula/$1', ['filter' => 'auth']);

$routes->post('comment/(:any)', 'Courses::postComment/$1', ['filter' => 'auth']);
$routes->post('get-comment', 'Courses::getComment', ['filter' => 'auth']);

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
