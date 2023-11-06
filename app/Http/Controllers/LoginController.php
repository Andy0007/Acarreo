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
        $login = false;

        //Verificamos si el usuario está activo
        $activo = User::query()->where('user', request()->user)->first('status');

        //Obtenemos el tipo de autenticación del usuario mediante consulta en la DB
        $autenticacion = User::query()->where('user', request('user'))->get('auten');

        if($activo == 'activo'){
            
        }else{
            return  redirect()->to('/')->with('error', "Falla del sistema");
        }




        if($autenticacion[0]->auten == 1){
            if(auth()->attempt(request(['user', 'password'])) == false){
                return  redirect()->to('/')->with('error', "Falla del sistema");
            }else {
                return redirect()->route('admin.index');
            }
        }else if ($autenticacion[0]->auten == 2){
            $login = Helpers::loginLDAP(request()->user, request()->password);

            if($login){
                if(auth()->attempt(request(['user', 'password'])) == false){
                    return  redirect()->to('/')->with('error', "Falla del sistema");
                }else {
                    return redirect()->route('admin.index');
                }
            }
        }

    }
}
