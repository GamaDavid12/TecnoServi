<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'patente',
        'chasis',
        'modelo_id'
        ];

        public function modelo()
        {
            return $this->belongsTo(Modelo::class);
        }  

        public function mostrarDatos()
        {
            return $this->patente . ' ' . $this->modelo->nombre . ' ' . $this->modelo->marca->nombre;
        }
}
