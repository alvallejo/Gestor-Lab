<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\EquipoModel;
use App\Models\LaboratorioModel;

class EquiposPrincipal extends Controller{
    var $datos;

public function index(){
        $user= new EquipoModel();
        $datos['datitos'] = $user->orderBy('idequipo','ASC')->findAll();
        return view('equipos2',$datos);
    }
}