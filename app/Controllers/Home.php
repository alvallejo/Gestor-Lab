<?php

namespace App\Controllers;
use CodeIgniter\Controller;
//use App\Models\GestorModel;


class Home extends BaseController
{
    //public function __construct()
    //{
        //$db = \Config\Database::connect();
        //$this->gm=new GestorModel();
    //} 
    
    public function login()
    { 
        return view('login');
    }
    public function registro()
    {
        return view('registro');
    }
    public function principal()
    {
        return view('principal');
    }

    public function principal_alumno()
    {
        return view('principal_alumno');
    }

    public function principal_maestro()
    {
        return view('principal_maestro');
    }

  
}
