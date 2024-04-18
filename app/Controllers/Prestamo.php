<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PrestamoModel;
use App\Models\UsuarioModel;
use App\Models\LaboratorioModel;
use App\Models\EquipoModel;

class Prestamo extends Controller{
    var $datos;
           
            public function index(){
            $user= new PrestamoModel();
        
             $datos['datitos']=$user->orderBy('fecha_prestamo','ASC')->findAll();
            return view('prestamo',$datos);
            }
            public function alta_prestamo(){
                $user = new UsuarioModel();
                $datos['datitos'] = $user->orderBy('idusuario','ASC')->findAll();
                $laboratorioModel = new LaboratorioModel();
                $equipoModel = new EquipoModel();
                $datos['laboratorios'] = $laboratorioModel->orderBy('idlaboratorio', 'ASC')->findAll();
                $datos['equipos'] = $equipoModel->orderBy('idequipo', 'ASC')->findAll();
            return view('alta_prestamo', $datos);
            }
            public function guardar_prestamo(){
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
             return view('prestamo',$datos);
            }
        
        public function borrar_prestamo($id=null){
            $user = new PrestamoModel();
            $user ->where('idprestamo',$id)->delete();
            return $this->response->redirect(site_url('/prestamo'));
             }
        public function editar_prestamo($id=null){
            $user = new PrestamoModel();
            $datos['datitos']=$user->where('idprestamo',$id)->first();
            return view('editar_prestamo',$datos);
        }
        public function actualizar_prestamo($id=null){
            $model = new PrestamoModel();
            $id = $this->request->getPost('idp');
        
            // Verificar si se enviaron datos
            if (!$this->request->getPost()) {
                return redirect()->to(base_url('editar_prestamo/' . $id));
            }
            $data = [
            'fecha_prestamo'=>$this->request->getPost('fp'),
             'hora_in'=>$this->request->getPost('hi'),
             'hora_fin'=>$this->request->getPost('hf'),
             'observaciones'=>$this->request->getPost('ob'),
             'idusuario'=>$this->request->getPost('idu'),
             'idlaboratorio2'=>$this->request->getPost('idlab'),
             'idequipo2'=>$this->request->getPost('eq'),
            ];
        
            $model->update($id, $data);
            return redirect()->to(base_url('prestamo'));
        }
        }
        ?>
