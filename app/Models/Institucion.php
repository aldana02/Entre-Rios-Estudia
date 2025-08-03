<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;

    protected $table = 'instituciones';

    protected $fillable = [
        'nombre',
        'descripcion',
        'email',
        'telefono',
        'direccion',
        'localidad',
        'idtipo_institucion',
    ];

    public function tipo()
    {
        return $this->belongsTo(TipoInstitucion::class, 'idtipo_institucion');
    }

    public function cursos()
    {
        return $this->hasMany(Curso::class, 'idtipo_institucion', 'idtipo_institucion');
    }
}
