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
            'usuario' => 'required|max:32|unique:usuarios',
            'email' => 'required|max:100',
            'contrasena' => 'required|confirmed'
        ]);

        if($validation->fails())
            return $validation->errors();

        return $this -> createUser($request);
        
    }
    private function createUser($request){
        $usuario = new Usuarios();
        $usuario -> usuario = $request -> post("usuario");
        $usuario -> email = $request -> post("email");
        $usuario -> contrasena = Hash::make($request -> post("contrasena"));
        
        $usuario -> save();
        return $usuario;
    }

}
