<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'estudiantes';
    protected $fillable = [ 'id',
    'Nombres', 
    'Apellidos', 
    'Fecha_Nacimiento', 
    'id_carrera', 
    'Sexo','estado_civil','Status','id_campus','id_pais'];
}
