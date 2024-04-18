<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\EquipoModel;
use App\Models\LaboratorioModel;

class Equipos extends Controller{
    var $datos;

public function index(){
        $user= new EquipoModel();
        $datos['datitos'] = $user->orderBy('idequipo','ASC')->findAll();
        return view('equipos',$datos);
    }

public function alta_equipo(){
        $user = new LaboratorioModel();
        $datos['datitos'] = $user->orderBy('idlaboratorio','ASC')->findAll();
        return view('alta_equipos', $datos);
    }


public function guardar_equipos(){
        $user = new EquipoModel();

        $datos = [
            'idequipo' => $this->request->getVar('ideq'),
            'nombre_equipo' => $this->request->getVar('nomeq'),
            'marca' => $this->request->getVar('mar'),
            'modelo' => $this->request->getVar('model'),
            'descripcion' => $this->request->getVar('descri'),
            'idlaboratorio' => $this->request->getVar('idlab'),
        ];

        $datos['datitos'] = $user->orderBy('idequipo','ASC')->findAll();
        $user->insert($datos);
        return view("equipos", $datos);
    }
    

public function borrar_equipos($id=null){
    $user = new EquipoModel();
    $user ->where('idequipo',$id)->delete();
    return $this->response->redirect(site_url('/equipos'));
        }
public function editar_equipos($id=null){
    $user = new EquipoModel();
    $datos['datitos']=$user->where('idequipo',$id)->first();
    return view('editar_equipo',$datos);
}
public function actualizar_equipos($id=null){
    $model = new EquipoModel();
    $id = $this->request->getPost('ideq');

    // Verificar si se enviaron datos
    if (!$this->request->getPost()) {
        return redirect()->to(base_url('editar_equipo/' . $id));
    }
    $data = [
        'idequipo'=>$this->request->getVar('ideq'),
        'nombre_equipo'=>$this->request->getVar('nomeq'),
        'marca'=>$this->request->getVar('mar'),
        'modelo'=>$this->request->getVar('model'),
        'descripcion'=>$this->request->getVar('descri'),
        'idlaboratorio'=>$this->request->getVar('idlab'),
    ];

    $model->update($id, $data);
    return redirect()->to(base_url('equipos'));
}
    }
    ?>