<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Nombre de la tabla en la DB
    protected $table = 'usuarios';

    // CAMPOS QUE PERMITIMOS GUARDAR (Esto arregla el MassAssignmentException)
    protected $fillable = ['nombre', 'email'];
}