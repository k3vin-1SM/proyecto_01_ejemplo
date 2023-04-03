<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos_venta extends Model
{
    use HasFactory;

    protected $table = 'tipos_venta';
    protected $fillable = ['nombre','status'];
}