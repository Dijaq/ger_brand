<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cotizacion;
use App\Cuentas;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizaciones = Cotizacion::with('cuenta')->with('paqueteServicios')->get();
        return $cotizaciones;
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
        try{      
            $cotizacion = new Cotizacion();
            $cotizacion->cuenta_id = $request->cuenta_id;
            $cotizacion->paquete_servicio_servicio_id = $request->paquete_servicio_servicio_id;
            $cotizacion->comentario = $request->comentario;
            $cotizacion->save();

            return response()->json(['message' => 'Generado Satisfactorimente']);
        } catch(\Exception $e){
            //return $e->getMessage();
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{            
            $cotizacion = Cotizacion::with('cuenta')->with('paqueteServicios')->findOrFail($id);
            return $cotizacion;
        }
        catch(\Exception $e){
            //return $e->getMessage();
            return response()->json(['message' => 'No se ha encontrado el elemento solicitado']);
        }
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
        try{      
            $cotizacion = Cotizacion::findOrFail($id);
            $cotizacion->cuenta_id = $request->cuenta_id;
            $cotizacion->paquete_servicio_servicio_id = $request->paquete_servicio_servicio_id;
            $cotizacion->comentario = $request->comentario;
            $cotizacion->update();

            return response()->json(['message' => 'Modificado Satisfactorimente']);
        } catch(\Exception $e){
            //return $e->getMessage();
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{     
            $cotizacion = Cotizacion::findOrFail($id);
            $cotizacion->delete();
            return response()->json(['message' => 'Eliminado Satisfactorimente']);
        } catch(\Exception $e){
            //return $e->getMessage();
            return response()->json(['message' => $e->getMessage()]);
        }

    }
}
