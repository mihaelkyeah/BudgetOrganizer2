<?php
require_once(getcwd().'/controllers/Controller.php');
class WebController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        include(getcwd().'/index.tpl.php');
    }
}