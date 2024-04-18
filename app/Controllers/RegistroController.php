<?php

namespace App\Controllers;

use App\Models\RegistroModel;
use CodeIgniter\Controller;
use CodeIgniter\Email\Email;

class RegistroController extends Controller
{
    public function index()
    {
        $data = [];
        helper(['form']);
        echo view('registro', $data);
    }

    public function registrar()
    {
        $request = \Config\Services::request();
        $RegistroModel = new RegistroModel();
$matricula = $request->getPost('matricula');
        if ($RegistroModel->where('matricula', $matricula)->first()) {
            $data['error_message'] = 'La matrícula ya está registrada.';
            echo view('registro', $data);
            return;}
        // Configurar las reglas de validación
        $rules = [
            'matricula' => 'required',
            'nombre' => 'required',
            'apellido_pa' => 'required',
            'apellido_ma' => 'required',
            'password' => 'required',
            'correo' => 'required|valid_email',
            'telefono' => 'required',
            'nssl' => 'required',
            'rol' => 'required',
            'carrera_idcarrera' => 'required',
            'estado' => 'required'
        ];
        $errors = [
            'matricula' => [
                'required' => 'La matrícula es requerida'
            ],
            'nombre' => [
                'required' => 'El nombre es requerido'
            ],
            'apellido_pa' => [
                'required' => 'El apellido paterno es requerido'
            ],
            'apellido_ma' => [
                'required' => 'El apellido materno es requerido'
            ],
            'password' => [
                'required' => 'La contraseña es requerida'
            ],
            'correo' => [
                'required' => 'El correo es requerido',
                'valid_email' => 'El correo no es válido'
            ],
            'telefono' => [
                'required' => 'El teléfono es requerido'
            ],
            'nssl' => [
                'required' => 'El NSS es requerido'
            ],
            'rol' => [
                'required' => 'El rol es requerido'
            ],
            'carrera_idcarrera' => [
                'required' => 'La carrera es requerida'
            ],
            'estado' => [
                'required' => 'El estado es requerido'
            ]
        ];
        if (!$this->validate($rules, $errors)) {
            $data['errors'] = $this->validator->getErrors();
            echo view('registro', $data);
        } else {
            // Datos del formulario
            $data = [
                'matricula' => $request->getPost('matricula'),
                'nombre' => $request->getPost('nombre'),
                'apellido_pa' => $request->getPost('apellido_pa'),
                'apellido_ma' => $request->getPost('apellido_ma'),
                'password' => $request->getPost('password'),
                'correo' => $request->getPost('correo'),
                'telefono' => $request->getPost('telefono'),
                'nssl' => $request->getPost('nssl'),
                'rol' => $request->getPost('rol'),
                'carrera_idcarrera' => $request->getPost('carrera_idcarrera'),
                'estado' => $request->getPost('estado')
            ];

            $RegistroModel->insert($data);

            // Enviar correo de bienvenida
            $this->enviarCorreoBienvenida($request->getPost('correo'));

            // Mostrar ventana emergente con mensaje de éxito
            $data['success_message'] = 'El registro se ha completado correctamente.';
            echo view('registro', $data);
        }
    }

    private function enviarCorreoBienvenida($correo)
    {
        $email = new Email();

        $email->setFrom(config('Email')->fromEmail, config('Email')->fromName);
        $email->setTo($correo);

        $email->setSubject('Bienvenido a nuestra aplicación');
        $email->setMessage('¡Hola! Gracias por registrarte en nuestra aplicación. Esperamos que disfrutes de nuestros servicios.');

        $email->send();
    }
}