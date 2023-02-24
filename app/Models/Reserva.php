<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $primaryKey='id_reserva';
    protected $foreignKey='id_clase,id_usuario';
    protected $table='reservas';
    protected $fillable=[
        'id_clase','id_usuario'
    ]; 

    public function clase(){
        return $this->belongsTo(
            'app\models\Clase',
            'id_clase',
            'id_clase');
    }

    public function user(){
        return $this->belongsTo(
            'app\models\User',
            'id_usuario',
            'id_usuario');
    }
}
