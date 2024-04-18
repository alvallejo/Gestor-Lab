<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CapacitacionModel;
class CapacitacionPrincipal extends Controller{
    var $datos;

    public function index()
    {
    $user = new CapacitacionModel();
    $datos['datitos'] = $user->orderBy('idcapacitacion', 'ASC')->findAll();
    return view('capacitacion2', $datos);

}}