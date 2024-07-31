<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']));
class Controller
{
    protected $model;
    public function __construct($model = null)
    {
        $this->model = $model;
    }
    public function sanityCheck()
    {
        return $this->model->sanityCheck();
    }
}