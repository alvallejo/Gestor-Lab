<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
class GestorModel extends Model
{
    function __construct()
    {

    }
    public function conscarr(){
        $data =$this->db->query("Select nombre FROM carrera");
        return $data;
    }
}
?> 