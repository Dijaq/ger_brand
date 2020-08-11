<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuentas;

class CuentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Cuentas::all();
        return $cuentas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuentas = new Cuentas();
        $cuentas->usuario_id = 0;
        $cuentas->ruc = $request->ruc;
        $cuentas->canal_llegada_id = $request->canal_llegada_id;
        $cuentas->nombre_comercial = $request->nombre_comercial;
        $cuentas->razon_social = $request->razon_social;
        $cuentas->domicilio_fiscal = $request->domicilio_fiscal;
        $cuentas->ubigeo_dpr = $request->ubigeo_dpr;
        $cuentas->notas = $request->notas;
        $cuentas->info_busqueda = $request->ruc+' '+ $request->razon_social;
        $cuentas->ubigeo = '';
        $cuentas->activo = 'ACTIVO';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
