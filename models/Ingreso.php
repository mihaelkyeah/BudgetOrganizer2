<?php
require_once(getcwd().'/models/Model.php');
class Ingreso extends Model
{
    public function __construct()
    {
        parent::__construct("ingreso");
    }
}