<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'idusuario';
    protected $allowedFields = ['matricula', 'nombre', 'apellido_pa', 'apellido_ma', 'password', 'correo', 'telefono', 'nssl', 'rol', 'carrera_idcarrera', 'estado'];
}
