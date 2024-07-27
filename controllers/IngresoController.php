<?php
require_once(getcwd().'/controllers/Controller.php');
require_once(getcwd().'/models/Ingreso.php');
class IngresoController extends Controller
{
    public function __construct()
    {
        parent::__construct(new Ingreso());
    }
    public function getIngresos()
    {
        return $this->model->getEgresos();
    }
    public function getIngreso($idIngreso)
    {
        return $this->model->getEgreso($idIngreso);
    }
}