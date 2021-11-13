<?php
namespace App\Models;

use CodeIgniter\Model;

class AnimalModel extends Model{

    protected $table      = 'animales';
    protected $primaryKey = 'a_id';

    protected $allowedFields = ['a_nombre', 'a_edad','a_fotografia','a_descripcion','a_tipoAnimal'];

    public function consultarPerro(){
        $consulta = $this->db->query("SELECT * FROM animales WHERE a_tipoAnimal = 1 ");
        return $consulta->getResultArray();
    }
    public function consultarGato(){
        $consulta = $this->db->query("SELECT * FROM animales WHERE a_tipoAnimal = 2 ");
        return $consulta->getResultArray();
    }
    public function consultarAve(){
        $consulta = $this->db->query("SELECT * FROM animales WHERE a_tipoAnimal = 3 ");
        return $consulta->getResultArray();
    }
    public function consultarReptil(){
        $consulta = $this->db->query("SELECT * FROM animales WHERE a_tipoAnimal = 4 ");
        return $consulta->getResultArray();
    }
    public function consultarCaballo(){
        $consulta = $this->db->query("SELECT * FROM animales WHERE a_tipoAnimal = 5 ");
        return $consulta->getResultArray();
    }
}

?>