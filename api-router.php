<?php

require_once('libs/Router.php');
require_once('controllers/WebController.php');
require_once('controllers/EgresoController.php');
require_once('controllers/IngresoController.php');

// Crear un objeto basado en la clase Router
$router = new Router();

// Definir la tabla de ruteo
$router->addRoute('', 'GET', 'WebController', 'index');
$router->addRoute('egresos', 'GET', 'EgresoController', 'getEgresos');
$router->addRoute('ingresos', 'GET', 'IngresoController', 'getIngresos');
$router->addRoute('egresos/:idEgreso', 'GET', 'EgresoController', 'getEgreso');
$router->addRoute('ingresos/:idIngreso', 'GET', 'IngresoController', 'getIngreso');
// $router->addRoute('comments/:ID_ins','GET','APIController','getComments');
// $router->addRoute('comment','POST','APIController','postComment');
// $router->addRoute('comment/:ID_comm','DELETE','APIController','deleteComment');

// $router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']);