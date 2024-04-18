<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CapacitacionModel;
class Capacitacion extends Controller{
    var $datos;

    public function index()
    {
    $user = new CapacitacionModel();
    $datos['datitos'] = $user->orderBy('idcapacitacion', 'ASC')->findAll();
    return view('capacitacion', $datos);
    }

    public function alta_capacitacion(){
    return view('alta_capacitacion');
    }
    public function guardar_capacitacion(){
     $user = new CapacitacionModel();

     $datos = [

     'nombre_capacitacion'=>$this->request->getVar('nomca'),
     'duracion'=>$this->request->getVar('du'),
     'descripcion'=>$this->request->getVar('des'),
     'clave'=>$this->request->getVar('cla'),
     'nombre_instructor'=>$this->request->getVar('nomin'),
     ];
$datos['datitos']=$user->orderBy('duracion','ASC')->findAll();
     $user->insert($datos);
     return view("capacitacion",$datos);
    }

public function borrar_capacitacion($id=null){
    $user = new CapacitacionModel();
    $user ->where('idcapacitacion',$id)->delete();
    return $this->response->redirect(site_url('/capacitacion'));
     }
public function editar_capacitacion($id=null){
    $user = new CapacitacionModel();
    $datos['datitos']=$user->where('idcapacitacion',$id)->first();
    return view('editar_capacitacion',$datos);
}
public function actualizar_capacitacion($id=null){
    $model = new CapacitacionModel();
    $id = $this->request->getPost('idc');

    // Verificar si se enviaron datos
    if (!$this->request->getPost()) {
        return redirect()->to(base_url('editar_capacitacion/' . $id));
    }
    $data = [
        'nombre_capacitacion'=>$this->request->getVar('nomca'),
        'duracion'=>$this->request->getVar('du'),
        'descripcion'=>$this->request->getVar('des'),
        'clave'=>$this->request->getVar('cla'),
        'nombre_instructor'=>$this->request->getVar('nomin'),
    ];

    $model->update($id, $data);
    return redirect()->to(base_url('capacitacion'));
}
}
?>