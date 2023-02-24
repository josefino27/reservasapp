<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_clase';
    protected $table = 'clases';
    protected $fillable = [
        'nombreClase',
        'cupo',
        'fecha',
        'comienza'=> 'datetime',
        'termina',
        'descripcion',
        'imagen'
        // 'fecha',
        // 'instructor',
        // 'sede'
    ];
    

}
