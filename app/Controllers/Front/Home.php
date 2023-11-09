<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Home extends BaseController {
    public function index(): string {
        return view('Front\welcome_message');
    }
    public function login() {
        return view('Front/VLogin');
    }
    public function data_login() {
        //Estas validaciones estan CI4,
        $validaciones = service('validation');
        $validaciones->setRules([
            'email' => 'required|max_length[30]|valid_email',
            'password' => 'required|max_length[30]|min_length[6]'
        ]);
        if (!$validaciones->withRequest($this->request)->run()) {
            //refresca l apagina actual y l eenvia por medio de session(flas-rapida) los errores ingresados en los
            //campos por medio de los campos y validaciones
            return redirect()->back()->withInput()->with('errors', $validaciones->getErrors());
        } else {
            try {
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');

                $muduario = model('MUsuario');
                $usuario = $muduario->getUserBy('email', $email);
                echo ($usuario['type']);

                if (!password_verify($password, $usuario['password'])) {
                    //Refresca la pagina actual, con errores, adiferencia de la anteriro aqui no usa los campos
                    //regresa el error que es mas de no encontar usuarios
                    return redirect()->back()->with('errores', 'Contraseña incorrecta');
                } else {
                    $usua = [
                        'id_usuario' => $usuario['id_usuario'],
                        'email' => $usuario['email'],
                        'type' => $usuario['type']
                    ];

                    $sesion = session();
                    $sesion->set($usua);
                    return redirect()->to(base_url('admin'));
                }
            } catch (\Throwable $e) {
                // Manejo del error
                return redirect()->back()->with('errores', 'Error en la base de datos de algun, Codigo: ' . $e->getCode() . '<br> Archivo: ' . $e->getFile() . '<br> Linea: ' . $e->getLine() . '<br> Mensage: ' . $e->getMessage());
            }

        }
    }
}
