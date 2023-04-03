<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['nombre','ap_pat','ap_mat','email','telefono','direccion','id_pais','id_entidad','municipio_id','id_tipo_usu','colonia','cp','fecha_naci','username','password','status'];
    public function paises()
    {
        return $this->belongsTo('App\Models\Paises', 'id_pais', 'id');
    }
    public function entidades()
    {
        return $this->belongsTo('App\Models\Entidades', 'id_entidad', 'id');
    }
    public function municipios()
    {
        return $this->belongsTo('App\Models\Municipios', 'municipio_id', 'id');
    }
    public function tipos_usuario()
    {
        return $this->belongsTo('App\Models\Tipos_usuario', 'id_tipo_usu', 'id');
    }
}