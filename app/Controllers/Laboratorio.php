<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LaboratorioModel;

class Laboratorio extends Controller
{
    public function index()
    {
        $user = new LaboratorioModel();
        $datos['datitos'] = $user->orderBy('idlaboratorio', 'ASC')->findAll();
        return view('laboratorio', $datos);
    }

    public function alta_laboratorio()
    {
        return view('alta_laboratorio');
    }

    public function guardar_laboratorio()
    {
        $user = new LaboratorioModel();
        $request = service('request'); // Obtener el objeto $request

        $datos = [
            'idlaboratorio' => $request->getVar('idlab'),
            'nombre_laboratorio' => $request->getVar('nomlab'),
            'ubicacion' => $request->getVar('ubi'),
            'nombre_responsable' => $request->getVar('nomres'),
            'estado' => $request->getVar('est'),
        ];

        $datos['datitos'] = $user->orderBy('idlaboratorio', 'ASC')->findAll();
        $user->insert($datos);

        return view("laboratorio", $datos);
    }

    public function borrar_laboratorio($id = null)
    {
        $user = new LaboratorioModel();
        $user->where('idlaboratorio',$id)->delete();
        return redirect()->to(site_url('/laboratorio')); // Cambio para redirigir
    }

    public function editar_laboratorio($id=null){
        $user = new LaboratorioModel();
        $datos['datitos']=$user->where('idlaboratorio',$id)->first();
        return view('editar_laboratorio',$datos);
    }
    public function actualizar_laboratorio($id=null){
        $model = new LaboratorioModel();
        $id = $this->request->getPost('idlab');
    
        // Verificar si se enviaron datos
        if (!$this->request->getPost()) {
            return redirect()->to(base_url('editar_laboratorio/' . $id));
        }
    
        $data = [
            'nombre_laboratorio' => $this->request->getVar('nomlab'),
            'ubicacion' => $this->request->getVar('ubi'),
            'nombre_responsable' => $this->request->getVar('nomres'),
            'estado' => $this->request->getVar('est'),
        ];
    
        // Validar si el nombre de laboratorio ya existe en otro registro
        $existente = $model->where('nombre_laboratorio', $data['nombre_laboratorio'])
                           ->where('idlaboratorio !=', $id)
                           ->first();
    
        if ($existente) {
            $datos['error'] = 'El nombre de laboratorio ya está siendo utilizado en otro registro.';
            $datos['datitos'] = $model->orderBy('idlaboratorio','ASC')->findAll();
            return view("cuerpos/laboratorio", $datos);
        }
    
        $model->update($id, $data);
        return redirect()->to(base_url('laboratorio'));
    }
}
?>

