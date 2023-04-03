<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $table = 'ventas';
    protected $fillable = ['id_cliente','fecha','subtotal','iva','total','id_tipo_pago','user_id','status'];
    public function clientes()
    {
        return $this->belongsTo('App\Models\Users', 'id_cliente', 'id');
    }
    public function users()
    {
        return $this->belongsTo('App\Models\Users', 'user_id', 'id');
    }
}