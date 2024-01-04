<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Administradores;
use App\Models\Usuarios_corrientes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function Register(Request $request){

        $validation = Validator::make($request->all(),[
            'username' => 'required|max:32|unique:usuarios',
            'email' => 'required|max:100',
            'password' => 'required|confirmed'
        ]);

        if($validation->fails())
            return $validation->errors();

        return $this -> createUser($request);
        
    }
    private function createUser($request){
        $usuario = new Usuarios();
        $usuario -> username = $request -> post("username");
        $usuario -> email = $request -> post("email");
        $usuario -> password = Hash::make($request -> post("password"));
        
        $usuario -> save();
        return $usuario;
    }

}
