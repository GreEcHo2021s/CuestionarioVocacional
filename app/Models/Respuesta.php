<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Respuesta extends Model
{
    use HasFactory;

    public function usuarios():BelongsTo{
        return $this->belongsTo(Usuario::class);
    }
    protected $casts = [
        'respuesta' => 'json',
    ];
    protected $fillable = [
        'respuesta',
        'usuario_id'
    ];

    protected $rules = [
        'respuesta' => 'required'
    ];
}
