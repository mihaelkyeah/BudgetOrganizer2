<?php
require_once(getcwd().'/controllers/Controller.php');
class WebController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public static function index()
    {
        if (!isset($_SESSION)) { session_start();}
        $msgType = $_SESSION['msgType'] ?? null;
        $msgText = $_SESSION['msgText'] ?? null;

        include(getcwd().'/index.tpl.php');

        if(isset($_SESSION['msgType']))
            unset($_SESSION['msgType']);
        if(isset($_SESSION['msgText']))
            unset($_SESSION['msgText']);

    }
    public static function prueba()
    {
        $msgTypes = ['info', 'danger', 'success', 'warning', 'other'];
        session_start();
        $_SESSION['msgType'] = $msgTypes[rand(0,(count($msgTypes)-1))];
        // $_SESSION['msgType'] = $msgTypes[4];
        $_SESSION['msgText'] = 'Prueba 123.';
        header('Location: '.BASE_URL);
    }
    public static function agregarIngreso()
    {
        session_start();
        $_SESSION['msgType'] = 'success';
        $_SESSION['msgText'] = 'El ingreso se ha agregado con éxito.';
        header('Location: '.BASE_URL.'/');
    }
}