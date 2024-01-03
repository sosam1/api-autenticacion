<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administradores extends Model
{
    use HasFactory;

    protected $table = "administradores";

    public $timestamps = false;
    protected $fillable = ['id_usuario'];
}
