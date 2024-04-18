<?php 
namespace App\Models;

use CodeIgniter\Model;

class CapacitacionModel extends Model{
    protected $table      = 'capacitacion';
    protected $primaryKey = 'idcapacitacion';
    protected $allowedFields=['idcapacitacion','nombre_capacitacion','duracion','descripcion','clave','nombre_instructor','estado'];
}