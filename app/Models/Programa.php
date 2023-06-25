<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Programa extends Model
{
    protected $table = 'programas';
    protected $primaryKey = 'cod_programa';

    public function facultad(){
        return $this->belongsTo(Facultad::class, 'cod_facultad');
    }
    public $timestamps = false;
}
