<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model{

    protected $table      = 'productos';
    protected $primaryKey = 'p_id';

    protected $allowedFields = ['p_producto', 'p_fotografia','p_precio','p_descripcion','p_tipo'];

}

?>