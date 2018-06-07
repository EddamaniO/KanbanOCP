<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AddCart extends Controller
{
    public function add(){
        $data = [
            'first_name' => "Eddamani",
            'last_name' => "Othmane",
        ];
        return view('add',$data);
    }
}
