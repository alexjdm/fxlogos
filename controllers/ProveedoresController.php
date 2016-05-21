<?php

include_once("models/ProveedoresModel.php");

class ProveedoresController {

    public $model;

    public function __construct()
    {
        $this->model = new ProveedoresModel();
    }

    public function index() {
        $proveedores = $this->model->getProveedoresList();
        require_once('views/proveedores/index.php');
    }

    public function error() {
        require_once('views/error/error.php');
    }
}
?>

