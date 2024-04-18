<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
class Usuario extends Controller{
      var $datos;


    public function index(){
        $user= new UsuarioModel();

        $datos['datitos']=$user->orderBy('matricula','ASC')->findAll();
        return view('cuerpos/usuarios',$datos);
    }
    public function alta_usuarios(){
    return view('alta_usuarios');
    }
    public function guardar_Usuario(){
     $user = new UsuarioModel();

     $datos = [

     'matricula'=>$this->request->getVar('mat'),
     'nombre'=>$this->request->getVar('nom'),
     'apellido_pa'=>$this->request->getVar('apellidopa'),
     'apellido_ma'=>$this->request->getVar('apellidoma'),
     'password'=>$this->request->getVar('pass'),
     'correo'=>$this->request->getVar('email'),
     'telefono'=>$this->request->getVar('tel'),
     'nssl'=>$this->request->getVar('nssl'),
     'rol'=>$this->request->getVar('rol'),
     'carrera_idcarrera'=>$this->request->getVar('car'),
     'estado'=>$this->request->getVar('est'),
     ];
$datos['datitos']=$user->orderBy('matricula','ASC')->findAll();
     $user->insert($datos);
     return view("cuerpos/usuarios",$datos);
    }

public function borrar($id=null){
    $user = new UsuarioModel();
    $user ->where('idusuario',$id)->delete();
    return $this->response->redirect(site_url('/usuarios'));
     }
public function editaru($id=null){
    $user = new UsuarioModel();
    $datos['datitos']=$user->where('idusuario',$id)->first();
    return view('editar',$datos);
}
public function actualizar($id=null){
    $model = new UsuarioModel();
    $id = $this->request->getPost('id');

    // Verificar si se enviaron datos
    if (!$this->request->getPost()) {
        return redirect()->to(base_url('editar/' . $id));
    }
    $data = [
        'matricula' => $this->request->getPost('mat'),
        'nombre' => $this->request->getPost('nom'),
        'apellido_pa' => $this->request->getPost('apellidopa'),
        'apellido_ma' => $this->request->getPost('apellidoma'),
        'password' => $this->request->getPost('pass'),
        'correo' => $this->request->getPost('corr'),
        'telefono' => $this->request->getPost('tel'),
        'nssl' => $this->request->getPost('nssl'),
        'rol' => $this->request->getPost('rol'),
        'carrera_idcarrera' => $this->request->getPost('car')
    ];

    $model->update($id, $data);
    return redirect()->to(base_url('usuarios'));
}
}
?>