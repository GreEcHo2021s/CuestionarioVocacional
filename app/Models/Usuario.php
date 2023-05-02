<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Respuesta;

class Usuario extends Model
{
    use HasFactory;
    protected $table='usuarios';
    public function respuestas():HasMany {
        return $this->hasMany(Respuesta::class);
    }
    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'email',
        'fecha_nacimiento',
        'educacion_alcanzada',
        'edad'
    ];

    protected $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'dni' => 'required',
        'email'=> 'required',
        'fecha_nacimiento' => 'required',
        'educacion_alcanzada' => 'required',
        'edad' => 'required'
    ];
}
