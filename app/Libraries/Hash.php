<?php
namespace App\Libraries;

Class Hash {
    public static function make($clave){
        return password_hash($clave,PASSWORD_BCRYPT);
    }
    public static function check($entered_password,$db_password){
        if(password_verify($entered_password,$db_password)){
            return true;
        }else{
            return false;
        }
    }
}


?>