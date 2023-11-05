<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function admin_index(){
        $ruta = "";

        return view("admin.index", compact("ruta"));
    }
}
