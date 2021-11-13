<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{

    protected $table      = 'usuarios';
    protected $primaryKey = 'u_id';

    protected $allowedFields = ['u_nombre', 'u_correo','u_celular','u_rol','u_clave','u_activo','u_delete_at'];

    public function consultarUsuario($correo){
        $consulta = $this->db->query("SELECT * FROM usuarios WHERE u_correo ='$correo'");
        return $consulta->getResultArray();
    }
}

?>