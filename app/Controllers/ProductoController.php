<?php

namespace App\Controllers;
use App\Models\ProductoModel;

class ProductoController extends BaseController
{
    public function productoView(){
        return view('registroProducto');
    }
    public function registrarProducto(){

        // 1. Recibir los datos del formulario

        $producto    = $this->request->getPost("producto");
        $foto        = $this->request->getPost("fotografia");
        $precio      = $this->request->getPost("precio");
        $descripcion = $this->request->getPost("descripcion");
        $tipo        = $this->request->getPost("tipo");

        // Se aplican validaciones

        if($this->validate('formularioProducto')){
            
            // Intentar conectar a la base de datos e insertar Datos
            try {
                // Sacarle una fotocopia de la class (Crear un objeto)
                $modelo = new ProductoModel();

                // Armo el paquete de datos a registrar
                 $datos = array(
                    "p_producto"    => $producto,
                    "p_fotografia"  => $foto,
                    "p_precio"      => $precio,
                    "p_descripcion" => $descripcion,
                    "p_tipo"        => $tipo
                );
                // Agrego los datos
                $modelo->insert($datos);

                // Entrego una respuesta
                $mensaje = "Exito agregando el producto";
                return redirect()->to(site_url('/Producto'))->with('mensaje',$mensaje);

            } catch (\Exception $error) {
                $mensaje = $error->getMessage();
                return redirect()->to(site_url('/Producto'))->with('mensaje',$mensaje);
            }

        }else{
            $mensaje= "Falta información para la creación del producto";
            return redirect()->to(site_url('/Producto'))->with('mensaje',$mensaje);
        }

        // 2. Construir arreglo asosiativo con los datos recibidos 

        // $datos = array(
        //     "producto"    => $producto,
        //     "foto"        => $foto,
        //     "precio"      => $precio,
        //     "descripcion" => $descripcion,
        //     "tipo"        => $tipo
        // );

        // echo var_dump($datos);
    }
}