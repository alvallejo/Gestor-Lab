<?php 
namespace App\Models;

use CodeIgniter\Model;

class PrestamoModel extends Model{
    protected $table      = 'prestamo';
    protected $primaryKey = 'idprestamo';
    protected $allowedFields=['idprestamo','fecha_prestamo','hora_in','hora_fin','observaciones','usuario1','idlaboratorio2','idequipo2','estado'];
}
?>
