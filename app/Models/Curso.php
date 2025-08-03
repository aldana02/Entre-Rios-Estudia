<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Curso as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Curso extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public function tipoInstitucion()
    {
        return $this->belongsTo(TipoInstitucion::class, 'idtipo_institucion');
    }

    public function rubro()
    {
        return $this->belongsTo(Rubro::class, 'idrubro');
    }

    public function subrubro()
    {
        return $this->belongsTo(Subrubro::class, 'idsubrubro');
    }

    public function nivel()
    {
        return $this->belongsTo(Nivel::class, 'idnivel');
    }
}