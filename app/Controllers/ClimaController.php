<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ClimaController extends BaseController
{
    public function index()
    {
        //
    }

    public function getClima(){
        $climaModel = model('ClimaModel');
        $data['clima'] = $climaModel->findAll();
        return view('clima',$data);
    }
}
