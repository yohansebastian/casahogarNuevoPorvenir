<?php

namespace App\Controllers;
use App\Models\AnimalModel;

class AnimalesController extends BaseController
{
    public function registrarAnimalView(){
        return view('registroAnimal');
    }
    public function registrar(){
         // 1. Recibir los datos del formulario

         $nombre      = $this->request->getPost("nombre");
         $edad        = $this->request->getPost("edad");
         $fotografia  = $this->request->getPost("fotografia");
         $descripcion = $this->request->getPost("descripcion");
         $tipo        = $this->request->getPost("tipo");
 
         // Se validan los datos
         if($this->validate('formularioAnimales')){
            
            // Intentar conectar a la base de datos e insertar Datos
            try {
                // Sacarle una fotocopia de la class (Crear un objeto)
                $modelo = new AnimalModel();

                // Armo el paquete de datos a registrar
                 $datos = array(
                    "a_nombre"      => $nombre,
                    "a_edad"        => $edad,
                    "a_fotografia"  => $fotografia,
                    "a_descripcion" => $descripcion,
                    "a_tipoAnimal"  => $tipo
                );
                // Agrego los datos
                $modelo->insert($datos);

                // Entrego una respuesta
                $mensaje = "Exito agregando el animal";
                return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);

            } catch (\Exception $error) {
                $mensaje = $error->getMessage();
                return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);
            }
  
         }else{
            $mensaje= "Falta información de los animales";
            return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);
         }


         // 2. Construir arreglo asosiativo con los datos recibidos 
 
        //  $datos = array(
        //      "nombre"      => $nombre,
        //      "edad"        => $edad,
        //      "fotografia"  => $fotografia,
        //      "descripcion" => $descripcion,
        //      "tipo"        => $tipo
        //  ); 

        //  print_r($datos);
    }
    public function buscarAnimal(){
        try {
            $modelo = new AnimalModel();
            $buscarAnimal = $modelo->findAll();
                
            $animales =array("animales" =>$buscarAnimal);
            return view('listaAnimales',$animales);
        } catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);
        }
    }
    public function eliminar($idAnimal){
        try {
            $modelo = new AnimalModel();
            $modelo->where('a_id',$idAnimal)->delete();

            $mensaje = "Exito eliminando el animal";
            return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);

        }catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);
        }
    }
    public function editar($idAnimal){
        echo ("Editando el animal".$idAnimal);
    }
}