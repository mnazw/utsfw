<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelProducts;

class Products extends BaseController
{
    public function index()
    {
        $model = new ModelProducts();
    	$kunci = $this->request->getVar('katakunci');

        if ($kunci) {
            $query = $model->pencarian($kunci);
            $text = 'Pencarian dengan kata kunci "'.$kunci.'"';
        } else {
            $query = $model;
            $text = '';
        }

        $data['products'] = $query->paginate();
        $data['text'] = $text;

        return view('products',$data);
    }

    public function detail($id)
    {
        $model = new ModelProducts();
        $data['products'] = $model->find($id);
        return view('products_detail',$data);
    }
}
