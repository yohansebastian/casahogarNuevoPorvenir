<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class APIProductos extends ResourceController
{
    protected $modelName = 'App\Models\ProductoModel';
    protected $format    = 'json';

    public function buscarProductos()
    {
        return $this->respond($this->model->findAll());
    }
    public function buscarProducto($id)
    {
        return $this->respond($this->model->find($id));
    }

    // ...
}