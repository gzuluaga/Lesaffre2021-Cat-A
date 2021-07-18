<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'formulario_id' => 'integer',
        'pregunta_id' => 'integer',
        'opciones_preguntas' => 'integer',
        'estado' => 'boolean',
    ];


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function formulario()
    {
        return $this->belongsTo(\App\Models\Formulario::class);
    }

    public function pregunta()
    {
        return $this->belongsTo(\App\Models\Preguntas::class);
    }

    public function opcionesPreguntas()
    {
        return $this->belongsTo(\App\Models\OpcionesPreguntas::class);
    }
}
