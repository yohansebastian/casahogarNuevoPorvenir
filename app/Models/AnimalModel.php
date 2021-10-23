<?php
namespace App\Models;

use CodeIgniter\Model;

class AnimalModel extends Model{

    protected $table      = 'animales';
    protected $primaryKey = 'a_id';

    protected $allowedFields = ['a_nombre', 'a_edad','a_fotografia','a_descripcion','a_tipoAnimal'];

}

?>