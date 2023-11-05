<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class LoginController extends Controller
{
    //
    public function index(){

        $ruta = '';

        return view('welcome', compact('ruta'));
    }

    public function login(){
        
        $ruta = '';

        $user = User::query()->where('user', request('user'))->get();

        

        //return redirect('admin_index'.$ruta);

    }
}
