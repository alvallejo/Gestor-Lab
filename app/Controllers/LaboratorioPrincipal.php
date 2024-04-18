<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LaboratorioModel;

class LaboratorioPrincipal extends Controller
{
    public function index()
    {
        $user = new LaboratorioModel();
        $datos['datitos'] = $user->orderBy('idlaboratorio', 'ASC')->findAll();
        return view('laboratorio2', $datos);
    }}