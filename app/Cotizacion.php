<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cuentas;
use App\PaqueteServicios;

class Cotizacion extends Model
{
    public $table = 'cotizaciones';
    
    public function cuenta()
    {
    	return $this->belongsTo(Cuentas::class, 'cuenta_id');
    }

    public function paqueteServicios()
    {
    	return $this->belongsTo(PaqueteServicios::class, 'paquete_servicio_id');
    }
}
