<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Login extends Controller {
    
    public function index() {
        $data = [];
        helper(['form']);
        echo view('login', $data);
    }

    public function autenticar() {
        
        $request = \Config\Services::request();
        $usuarioModel = new UsuarioModel();

        // Configurar las reglas de validación
        $rules = [
            'matricula' => 'required',
            'password' => 'required'
        ];
        $errors = [
            'matricula' => [
                'required' => 'La matrícula es requerida'
            ],
            'password' => [
                'required' => 'La contraseña es requerida'
            ]
        ];
        $this->validate($rules, $errors);

        $matricula = $request->getVar('matricula');
        $password = $request->getVar('password');
        $usuario = $usuarioModel->where('matricula', $matricula)->first();

        if (!$usuario || $usuario['password'] != $password) {
            $data['error'] = 'La matrícula o la contraseña son incorrectos';
            return view('login', $data);
        }

        $session = \Config\Services::session();
        $session->set([
            'idusuario' => $usuario['idusuario'],
            'nombre' => $usuario['nombre'],
            'rol' => $usuario['rol']
        ]);
 
        switch ($usuario['rol']) {
            case 'Administrador':
                return redirect()->to('principal');
            case 'Estudiante':
                return redirect()->to('principal_alumno');
            case 'Maestro':
                return redirect()->to('principal_maestro');
                default:
                    $session->setFlashdata('error', 'Rol no válido');
                    return redirect()->to('login');
        }
    }

    public function cerrarSesion() {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to('login');
    }
}

