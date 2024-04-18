<?php 
namespace App\Models;

use CodeIgniter\Model;

class EquipoModel extends Model{
    protected $table      = 'equipo';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idequipo';
    protected $allowedFields=['idequipo','nombre_equipo','marca','modelo','descripcion','idlaboratorio','estado'];
}
