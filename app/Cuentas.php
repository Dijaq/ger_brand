<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cotizacion;

class Cuentas extends Model
{
    public $table = 'cuentas';
    
    public function cotizacion()
	{
		return $this->hasMany(Cotizacion::class, 'cuenta_id');
	}
}
