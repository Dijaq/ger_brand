<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cotizacion;

class PaqueteServicios extends Model
{
    public $table = 'paquete_servicios';
    
    public function cotizacion()
	{
		return $this->hasMany(Cotizacion::class, 'paquete_servicio_id');
	}
}
