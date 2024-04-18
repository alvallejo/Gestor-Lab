<?php 
namespace App\Models;

use CodeIgniter\Model;

class LaboratorioModel extends Model{
    protected $table      = 'laboratorio';
    // Uncomment below if you want add primary key
   
    protected $primaryKey = 'idlaboratorio';
    protected $allowedFields=['idlaboratorio','nombre_laboratorio','ubicacion','nombre_responsable','estado'];
}
?>