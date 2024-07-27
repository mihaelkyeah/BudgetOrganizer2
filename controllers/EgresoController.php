<?php
require_once(getcwd().'/controllers/Controller.php');
require_once(getcwd().'/models/Egreso.php');
class EgresoController extends Controller
{
    public function __construct()
    {
        parent::__construct(new Egreso());
    }
    public function getEgresos()
    {
        return $this->model->getEgresos();
    }
    public function getEgreso($idEgreso)
    {
        return $this->model->getEgreso($idEgreso);
    }
}