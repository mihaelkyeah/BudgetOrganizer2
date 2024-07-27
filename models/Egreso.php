<?php
require_once(getcwd().'/models/Model.php');
class Egreso extends Model
{
    public function __construct()
    {
        parent::__construct("egreso");
    }
}