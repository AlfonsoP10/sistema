<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios'; // Especificamos el nombre de la tabla
    protected $fillable = ['nombre', 'email']; // Campos permitidos
}