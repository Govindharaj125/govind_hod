<?php namespace Config;

// Create a new instance of our RouteCollection class.
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
$routes->setDefaultController('PageController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// SAMPLE CONTROLLER
//$routes->get('sample', 'SampleController::index');

// PAGE CONTROLLER
$routes->get('index', 'PageController::index');


//$routes->get('donate', 'PageController::donate');
$routes->get('historyofcsi', 'PageController::historyofcsi');
$routes->get('historyofthechurch', 'PageController::historyofthechurch');
$routes->get('pcmembers', 'PageController::pcmembers');
$routes->get('coordinators', 'PageController::coordinators');
$routes->get('secretarytreasurerrollcall', 'PageController::secretarytreasurerrollcall');

$routes->get('fellowships', 'PageController::fellowships');
$routes->get('evangelism', 'PageController::evangelism');
$routes->get('outreachministries', 'PageController::outreachministries');
$routes->get('counselling', 'PageController::counselling');

$routes->get('contactus', 'PageController::contactus');


//$routes->get('login', 'PageController::login');
$routes->get('logout', 'PageController::logout');
$routes->match(['get', 'post'], 'login', 'PageController::login');
$routes->get('member-profile', 'PageController::member_profile');
$routes->match(['get', 'post'], 'forgot-password', 'PageController::forgot_password');


$routes->get('ajaxload-login', 'AjaxloadController::login');
$routes->get('ajaxload-donate', 'AjaxloadController::donate');

$routes->get('member-profile/edit/(:num)', 'PageController::edit/$1');
$routes->post('member-profile/update/(:num)', 'PageController::update/$1');

$routes->get('pastorsrollcall', 'PageController::pastorsrollcall');

// $routes->get('member-profile/delete/(:num)', 'PageController::delete/$1');

// SAMPLE CONTROLLER(TABLE VIEW)
// $routes->get('students-add', 'SampleController::create');
// $routes->post('students-store', 'SampleController::store');



/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'PageController::index');
$routes->group('admin', ['namespace' => 'Modules\CTadmin\Controllers'], function($routes)
{
    $routes->get('/', 'Home::index');
	$routes->get('login', 'Home::login');
	$routes->post('login', 'Home::login');
	$routes->get('logout', 'Home::logout');

	// CardMembers Routes Starts Here
	$routes->get('card-member-new', 'CardMembersController::create');
	$routes->get('card-members', 'CardMembersController::index');
	$routes->post('card-members-list', 'CardMembersController::list');

	$routes->get('card-members/edit/(:num)', 'CardMembersController::edit/$1');
	$routes->post('card-members/update/(:num)', 'CardMembersController::update/$1');
	$routes->get('card-members/delete/(:num)', 'CardMembersController::delete/$1');
	// CardMembers Routes Ends Here

	// Banner Routes Starts Here
	$routes->get('banner', 'BannerController::index');
	$routes->get('banner-add', 'BannerController::create');
	$routes->post('banner-store', 'BannerController::store');

	$routes->get('banner/edit/(:num)', 'BannerController::edit/$1');
	$routes->post('banner/update/(:num)', 'BannerController::update/$1');
	$routes->get('banner/delete/(:num)', 'BannerController::delete/$1');
	// Banner Routes Ends Here

	// Events Routes Starts Here
	$routes->get('events', 'EventsController::index');
	$routes->get('events-add', 'EventsController::create');
	$routes->post('events-store', 'EventsController::store');

	$routes->get('events/edit/(:num)', 'EventsController::edit/$1');
	$routes->post('events/update/(:num)', 'EventsController::update/$1');
	$routes->get('events/delete/(:num)', 'EventsController::delete/$1');
	// Events Routes Ends Here

	// Quote Routes Starts Here
	$routes->get('quote', 'QuoteController::index');
	$routes->get('quote-add', 'QuoteController::create');
	$routes->post('quote-store', 'QuoteController::store');

	$routes->get('quote/edit/(:num)', 'QuoteController::edit/$1');
	$routes->post('quote/update/(:num)', 'QuoteController::update/$1');
	$routes->get('quote/delete/(:num)', 'QuoteController::delete/$1');
	// Quote Routes Ends Here

});

// StaticPage Routes Starts Here
$routes->get('(:segment)', 'PageController::static_pages/$1');
// StaticPage Routes Ends Here

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
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
