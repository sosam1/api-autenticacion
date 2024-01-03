<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios_corrientes extends Model
{
    use HasFactory;

    protected $table = "usuarios_corrientes";

    public $timestamps = false;
    protected $fillable = ['id_usuario'];
}
