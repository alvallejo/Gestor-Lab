<?php

namespace App\Controllers;

use App\Models\EliminarModel;
use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class BajaUsuarios extends Controller
{
    public function index()
    {
        $usuario = new EliminarModel();
        $data['usuarios'] = $usuario->orderBy('matricula', 'ASC')->findAll();
        return view('baja_usuarios', $data);
    }

    public function borrarUsuario($matricula)
    {
        $usuario = new UsuarioModel();
        $usuario->where('matricula', $matricula)->delete();
        return redirect()->to(base_url('baja_usuarios'));
    }
}