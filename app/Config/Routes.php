<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/Bienvenida', 'Home::index');

// Cada funcion de un controlador puede tener su propia ruta

// Rutas de productos

$routes->get('/Producto', 'ProductoController::productoView');
$routes->post('/registrarProducto', 'ProductoController::registrarProducto');
$routes->get('/buscarProducto', 'ProductoController::buscarProducto');
$routes->get('/productos/eliminar/(:num)', 'ProductoController::eliminar/$1');
$routes->post('/productos/editar/(:num)', 'ProductoController::editar/$1');

// Rutas de formulario animales

$routes->get('/Animales', 'AnimalesController::registrarAnimalView');
$routes->post('/registrarMascota', 'AnimalesController::registrar');
$routes->get('/buscarAnimal', 'AnimalesController::buscarAnimal');
$routes->get('/animal/eliminar/(:num)', 'AnimalesController::eliminar/$1');
$routes->post('/animal/editar/(:num)', 'AnimalesController::editar/$1');

// Lista por tipo de animal
$routes->get('/buscarAnimalPerro', 'AnimalesController::buscarAnimalPerro');
$routes->get('/buscarAnimalGato', 'AnimalesController::buscarAnimalGato');
$routes->get('/buscarAnimalAve', 'AnimalesController::buscarAnimalAve');
$routes->get('/buscarAnimalReptil', 'AnimalesController::buscarAnimalReptil');
$routes->get('/buscarAnimalCaballo', 'AnimalesController::buscarAnimalCaballo');


// Lista de rutas API 
$routes->get('/v1/productos', 'APIProductos::buscarProductos');
$routes->get('/v1/productos/(:num)', 'APIProductos::buscarProducto/$1');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
