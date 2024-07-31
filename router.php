<?php
require('controllers/WebController.php');
if($_GET['action'] == '') {
    $_GET['action'] = 'home';
}
$urlParts = explode('/', $_GET['action']);

// ====== Operaciones asignadas a las URL ======
switch($urlParts[0]) {
    // Operaciones de usuario
    case 'home':
        WebController::index();
    break;
    case 'prueba':
        WebController::prueba();
    break;
    default:
    break;
}

?>