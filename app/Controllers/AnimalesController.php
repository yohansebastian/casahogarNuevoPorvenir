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
        // 1. Recibir los datos del formulario

        $nombre    = $this->request->getPost("nombre");
        $descripcion = $this->request->getPost("descripcion");

        if($this->validate('formularioEditarAnimal')){
          
          // Intentar conectar a la base de datos e insertar Datos
          try {
              // Sacarle una fotocopia de la class (Crear un objeto)
              $modelo = new AnimalModel();

              // Armo el paquete de datos a registrar
               $datos = array(
                  "a_nombre"    => $nombre,
                  "a_descripcion" => $descripcion
              );
              // Agrego los datos
              $modelo->update($idAnimal,$datos);

              // Entrego una respuesta
              $mensaje = "Exito editando el animal";
              return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);

          } catch (\Exception $error) {
              $mensaje = $error->getMessage();
              return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);
          }

      }else{
          $mensaje= "Falta información para la edición del Animal";
          return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);
      }

    }
    public function buscarAnimalPerro(){
        try {
            $modelo = new AnimalModel();
            $buscarAnimal = $modelo->consultarPerro();
                
            $animales =array("animales" =>$buscarAnimal);
            return view('listaAnimales',$animales);
        } catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);
        }
    }
    public function buscarAnimalGato(){
        try {
            $modelo = new AnimalModel();
            $buscarAnimal = $modelo->consultarGato();
                
            $animales =array("animales" =>$buscarAnimal);
            return view('listaAnimales',$animales);
        } catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);
        }
    }
    public function buscarAnimalAve(){
        try {
            $modelo = new AnimalModel();
            $buscarAnimal = $modelo->consultarAve();
                
            $animales =array("animales" =>$buscarAnimal);
            return view('listaAnimales',$animales);
        } catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);
        }
    }
    public function buscarAnimalReptil(){
        try {
            $modelo = new AnimalModel();
            $buscarAnimal = $modelo->consultarReptil();
                
            $animales =array("animales" =>$buscarAnimal);
            return view('listaAnimales',$animales);
        } catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);
        }
    }
    public function buscarAnimalCaballo(){
        try {
            $modelo = new AnimalModel();
            $buscarAnimal = $modelo->consultarCaballo();
                
            $animales =array("animales" =>$buscarAnimal);
            return view('listaAnimales',$animales);
        } catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/Animales'))->with('mensaje',$mensaje);
        }
    }
}