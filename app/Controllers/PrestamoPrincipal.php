<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PrestamoModel;
use App\Models\UsuarioModel;
use App\Models\LaboratorioModel;
use App\Models\EquipoModel;

class PrestamoPrincipal extends Controller{
    var $datos;
           
            public function index(){
            $user= new PrestamoModel();
        
             $datos['datitos']=$user->orderBy('fecha_prestamo','ASC')->findAll();
            return view('prestamo2',$datos);
            }
            public function alta_prestamo2(){
                $user = new UsuarioModel();
                $datos['datitos'] = $user->orderBy('idusuario','ASC')->findAll();
                $laboratorioModel = new LaboratorioModel();
                $equipoModel = new EquipoModel();
                $datos['laboratorios'] = $laboratorioModel->orderBy('idlaboratorio', 'ASC')->findAll();
                $datos['equipos'] = $equipoModel->orderBy('idequipo', 'ASC')->findAll();
            return view('alta_prestamo2', $datos);
            }
            public function guardar_prestamo2(){
             $user = new PrestamoModel();
        
             $datos = [
        
             'fecha_prestamo'=>$this->request->getVar('fp'),
             'hora_in'=>$this->request->getVar('hi'),
             'hora_fin'=>$this->request->getVar('hf'),
             'observaciones'=>$this->request->getVar('ob'),
             'usuario1'=>$this->request->getVar('idu'),
             'idlaboratorio2'=>$this->request->getVar('idlab'),
             'idequipo2'=>$this->request->getVar('eq'),
             ];
        $datos['datitos']=$user->orderBy('fecha_prestamo','ASC')->findAll();
             $user->insert($datos);
             return view('prestamo2',$datos);
            }
        
        }
        ?>
