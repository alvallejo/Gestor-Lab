<?php

namespace Config;

use CodeIgniter\Config\Services;

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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::login');
$routes->get('/registro', 'Home::registro');
$routes->get('/principal', 'Home::principal');
$routes->get('/principal_alumno', 'Home::principal_alumno');
$routes->get('/principal_maestro', 'Home::principal_maestro');


/*
 * --------------------------------------------------------------------
 * Route to process form data and save to database
 * --------------------------------------------------------------------
 */

$routes->post('/guardar-usuario', 'Usuario::guardarUsuario');

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

$routes->get('usuarios', 'Usuario::index');
$routes->get('alta_usuarios', 'Usuario::alta_usuarios');
$routes->post('guardar_Usuario', 'Usuario::guardar_Usuario');
$routes->get('borrar/(:num)', 'Usuario::borrar/$1');
$routes->get('editar/(:num)', 'Usuario::editaru/$1');
$routes->post('actualizar', 'Usuario::actualizar');

// Rutas para el controlador Login
$routes->get('/login', 'Login::index');
$routes->post('/login/autenticar', 'Login::autenticar');
$routes->get('/cerrar-sesion', 'Login::cerrarSesion');

$routes->get('/', 'RegistroController::index');
$routes->post('registro/registrar', 'RegistroController::registrar');
$routes->get('login', 'LoginController::index');
$routes->post('login/autenticar', 'LoginController::autenticar');

$routes->get('laboratorio', 'Laboratorio::index');
$routes->get('alta_laboratorio', 'Laboratorio::alta_laboratorio');
$routes->post('guardar_laboratorio', 'Laboratorio::guardar_laboratorio');
$routes->get('borrar_laboratorio/(:num)', 'Laboratorio::borrar_laboratorio/$1');
$routes->get('editar_laboratorio/(:num)', 'Laboratorio::editar_laboratorio/$1');
$routes->post('actualizar_laboratorio', 'Laboratorio::actualizar_laboratorio');

$routes->get('laboratorio2', 'LaboratorioPrincipal::index');

$routes->get('capacitacion', 'Capacitacion::index');
$routes->get('alta_capacitacion', 'Capacitacion::alta_capacitacion');
$routes->post('guardar_capacitacion', 'Capacitacion::guardar_capacitacion');
$routes->get('borrar_capacitacion/(:num)', 'Capacitacion::borrar_capacitacion/$1');
$routes->get('editar_capacitacion/(:num)', 'Capacitacion::editar_capacitacion/$1');
$routes->post('actualizar_capacitacion', 'Capacitacion::actualizar_capacitacion');

$routes->get('capacitacion2', 'CapacitacionPrincipal::index');

$routes->get('prestamo', 'Prestamo::index');
$routes->get('alta_prestamo', 'Prestamo::alta_prestamo');
$routes->post('guardar_prestamo', 'Prestamo::guardar_prestamo');
$routes->get('borrar_prestamo/(:num)', 'Prestamo::borrar_prestamo/$1');
$routes->get('editar_prestamo/(:num)', 'Prestamo::editar_prestamo/$1');
$routes->post('actualizar_prestamo', 'Prestamo::actualizar_prestamo');

$routes->get('prestamo2', 'PrestamoPrincipal::index');
$routes->get('alta_prestamo2', 'PrestamoPrincipal::alta_prestamo2');
$routes->post('guardar_prestamo2', 'PrestamoPrincipal::guardar_prestamo2');

$routes->get('equipos', 'Equipos::index');
$routes->get('alta_equipos', 'Equipos::alta_equipo');
$routes->post('guardar_equipos', 'Equipos::guardar_equipos');
$routes->get('borrar_equipos/(:num)', 'Equipos::borrar_equipos/$1');
$routes->get('editar_equipos/(:num)', 'Equipos::editar_equipos/$1');
$routes->post('actualizar_equipos', 'Equipos::actualizar_equipos');

$routes->get('equipos2', 'EquiposPrincipal::index');







$routes->get('capacitaciones', 'Capacitacion_alumno::index');

$routes->get('equipos-laboratorio', 'EquiposLaboratorio::index');


?>



 


 