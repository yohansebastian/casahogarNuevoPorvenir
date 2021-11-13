<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use App\Libraries\Hash;

class Auth extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

    public function login()
    {
        return view('auth/login');
    }
    public function registro()
    {
        return view('auth/registro');
    }
    public function registrar()
    {
        $validation = $this->validate(
            [
                'nombre' => 'required',
                'correo' => 'required|valid_email|is_unique[usuarios.u_correo]',
                'clave'  => 'required|min_length[5]|max_length[50]',
                'cclave' => 'required|min_length[5]|max_length[50]|matches[clave]'
            ],
            [
                'nombre' => ['required' => 'El nombre de usuario es requerido'],
                'correo' => ['required' => 'El correo electronico es requerido', 'valid_email' => 'Digite un correo electronico valido', 'is_unique'=>'El correo electronico ya se encuentra en uso'],
                'clave' => ['required' => 'La contraseña es obligatoria','min_length' =>'La contraseña es minimo de una longitud de 5 caracteres o numeros','max_length' =>'La contraseña es maximo de 20 caracteres o numeros'],
                'cclave' => ['required' => 'Confirme la contraseña','min_length'=>'La contraseña es minimo de 20 caracteres o numeros','max_length' =>'La contraseña es maximo de 20 caracteres o numeros','matches' => 'Las contraseñas no coinciden']
            ]
        );

        if(!$validation){
            return view('auth/registro',['validation'=>$this->validator]);
        }else{
            $nombre = $this->request->getPost('nombre');
            $celular = $this->request->getPost('celular');
            $correo = $this->request->getPost('correo');
            $clave = $this->request->getPost('clave');
            $rol = "Usuario";

            $data = [
                'u_nombre'  => $nombre,
                'u_correo'  =>$correo,
                'u_celular' =>$celular,
                'u_clave'   =>Hash::make($clave),
                'u_rol'     =>$rol
            ];
            $model = new UsuarioModel();
            $insert = $model->insert($data);
            if(!$insert) {
                return redirect()->back()->with('error', 'Algo salio mal');  
            }else{
                return redirect()->back()->with('success', 'Te has registrado exitosamente');
            }

        }
    }

    public function verificar(){
        $validation = $this->validate([
            'correo' =>[
                'rules' => 'required|valid_email|is_not_unique[usuarios.u_correo]',
                'errors'=> [
                    'required' => 'El correo electrónico es requerido',
                    'valid_email' => 'Digite un correo electrónico valido',
                    'is_not_unique' => 'Este correo electrónico no esta registrado o esta desactivado '
                ]
                ],
                'clave' => [
                    'rules' => 'required|min_length[5]|max_length[50]',
                    'errors' =>[
                        'required'      => 'La contraseña es requerida',
                        'min_length'    => 'Contraseña muy corta',
                        'max_length'    => 'La contraseña supera el limite de caracteres'
                    ]
                ]
        ]);

        if(!$validation){
            return view('auth/login',['validation'=>$this->validator]);
        }else{
            $model = new UsuarioModel();
            $correo = $this->request->getPost('correo');
            $clave = $this->request->getPost('clave');
            $user_info = $model->consultarUsuario($correo);
            // $check_password = Hash::check($clave,$user_info['u_clave']);
            $check_password = Hash::check('$2y$10$xYvRGCOMPlWGYVek2Vv5Ee9W2HBbXcFdb37jBwO8zTi','$2y$10$xYvRGCOMPlWGYVek2Vv5Ee9W2HBbXcFdb37jBwO8zTi');
            echo var_dump($check_password);
            exit();
            if(!$check_password){
                session()->setFlashdata('error','Contraseña incorrecta');
                return redirect()->to('auth/login')->withInput();
            }else{
                $idUsuario = $user_info['u_id'];
                session()->set('loggedUser',$idUsuario);
                return redirect()->to('casahogarNuevoPorvenir');
            }
        }
    }
}