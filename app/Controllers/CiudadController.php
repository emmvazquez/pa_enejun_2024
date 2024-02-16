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


    public function postCiudad(){
        $model = model('CiudadModel');
        $request = request();
        $ciudad = $_POST['ciudad'];
        $abreviatura = $_POST['abreviatura'];
        $data = [
            'ciudad'=>$ciudad,
            'abreviatura' => $abreviatura
        ];
        $model->insert($data, false);
        
    }

    public function respuesta(){
        $request = request();
        echo '<pre>';
        print_r($request);
    }
}
