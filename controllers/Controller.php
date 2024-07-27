<?php
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