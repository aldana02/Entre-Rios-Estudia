<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoInstitucion extends Model
{
    use HasFactory;

    protected $table = 'tipo_institucion';

    protected $fillable = ['nombre_tipo'];

    public function instituciones()
    {
        return $this->hasMany(Institucion::class, 'idtipo_institucion');
    }
}
