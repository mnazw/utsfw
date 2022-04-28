<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelDrivers;

class Drivers extends BaseController
{
    public function index()
    {
        $model = new ModelDrivers();
        $data['title'] = 'Drivers';
        // $data['drivers'] = ModelDrivers::tampil();
        $data['drivers'] = $model->tampil();
        return view('drivers', $data);        
    }
}
