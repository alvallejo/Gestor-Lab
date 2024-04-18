<?php

namespace App\Models;

use CodeIgniter\Model;

class EliminarModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'matricula';
    protected $allowedFields = ['matricula', 'nombre', 'apellido_pa', 'apellido_ma', 'correo', 'telefono', 'password', 'Id_carrera', 'nss', 'rol'];
}
