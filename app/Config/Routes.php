<?php

namespace Config;

// Create a new instance of our RouteCollection class.
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// navbar
use App\Controllers\BrowseAnime;
use App\Controllers\AboutUs;
use App\Controllers\ContactUs;

use App\Controllers\Anime;
use App\Controllers\AnimeEpisode;

// add
use App\Controllers\AddAnime;
use App\Controllers\AddEpisode;

// auth
use App\Controllers\Login;
use App\Controllers\Singup;
use App\Controllers\Logout;

use App\Controllers\Home;

// dashboard
use App\Controllers\UserDashboard;
use App\Controllers\AdminDashboard;
use App\Controllers\MenageEpisode;
use App\Controllers\MenageUser;


$routes->get("/", [Home::class, 'index']);
$routes->get("post/(:any)", [Anime::class, 'index']);
$routes->get("episode/(:segment)/(:segment)", [AnimeEpisode::class, "index"]);

// navbar

$routes->get("browse", [BrowseAnime::class, 'index']);
$routes->get('about', [AboutUs::class, 'index']);
$routes->get('contact', [ContactUs::class, 'index']);

// add
$routes->match(['get', 'post'], "add", [AddAnime::class, "index"]);
$routes->get("addepisode", [AddEpisode::class, "index"]);
$routes->get('logout', [Logout::class, 'index']);

// auth
$routes->get("login", [Login::class, 'index']);
$routes->match(['get', 'post'], 'singup', [Singup::class, 'index']);

// dashboard
$routes->get('userDashboard', [UserDashboard::class, 'index']);
$routes->get('dashboard', [AdminDashboard::class, 'index']);
$routes->get('dashboard/menageepisode', [MenageEpisode::class, "index"]);
$routes->get('dashboard/menageuser', [MenageUser::class, 'index']);
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
