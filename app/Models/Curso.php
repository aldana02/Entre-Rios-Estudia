<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'modalidad',
        'duracion',
        'costo',
        'fecha_inicio',
        'fecha_fin',
        'institucion_id',
        'rubro_id',
        'nivel_id',
    ];

    public function institucion()
    {
        return $this->belongsTo(Institucion::class);
    }

    public function rubro()
    {
        return $this->belongsTo(Rubro::class);
    }

    public function nivel()
    {
        return $this->belongsTo(Nivel::class);
    }
}
