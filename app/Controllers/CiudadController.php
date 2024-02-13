<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CiudadController extends BaseController
{
    public function index()
    {
        //
    }

    public function getCiudades(){
        $model = model('CiudadModel');
        $data['ciudades'] = $model->findAll();
        return view('ciudades',$data);
    }
}
