<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    use HasFactory;

    protected $table = 'municipios';
    protected $fillable = ['id_entidad','nombre','status'];
    public function entidades()
    {
        return $this->belongsTo('App\Models\Entidades', 'id_entidad', 'id');
    }
}