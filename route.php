<?php
require('controllers/WebController.php');
$webCtrl = new WebController();

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
if($_GET['action'] == '') {
    $_GET['action'] = 'home';
}
$urlParts = explode('/', $_GET['action']);

// ====== Operaciones asignadas a las URL ======
switch($urlParts[0]) {
    // Operaciones de usuario
    case 'home':
        $webCtrl->index();
    break;

    default:
    break;
}

?>