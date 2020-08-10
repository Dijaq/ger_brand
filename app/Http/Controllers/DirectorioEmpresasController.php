<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DirectorioEmpresas;
use App\DirectorioCategoriaRel;

class DirectorioEmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directorioEmpresas = DirectorioEmpresas::all();
        return $directorioEmpresas;
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
            $directorioEmpresa = new DirectorioEmpresas();
            $directorioEmpresa->categoria_id = 0;
            $directorioEmpresa->empresa_id = 0;
            $directorioEmpresa->nombre_comercial = $request->nombre_comercial;
            $directorioEmpresa->razon_social = $request->razon_social;
            $directorioEmpresa->ruc = $request->ruc;
            $directorioEmpresa->domicilio_fiscal = $request->domicilio_fiscal;
            $directorioEmpresa->telefonos = $request->telefonos;
            $directorioEmpresa->correo = $request->correo;
            $directorioEmpresa->notas = $request->notas;
            $directorioEmpresa->estado = "NUEVO";
            $directorioEmpresa->save();
            //TODO DISTRITO REGION

            foreach($request->empresa_categorias as $empresa_categoria)
            {
                $directorioCategoriaRel = new DirectorioCategoriaRel();
                $directorioCategoriaRel->empresa_id = $directorioEmpresa->id;
                $directorioCategoriaRel->categoria_id = $empresa_categoria['categoria_id'];
                $directorioCategoriaRel->save();
            }

            foreach($request->personas as $persona)
            {
                $directorioPersona = new DirectorioPersonas();
                $directorioPersona->empresa_id = $directorioEmpresa->id;
                $directorioPersona->persona_id = $persona['persona_id'];
                $directorioPersona->rol = $persona['rol'];
                $directorioPersona->save();
            }

            //TODO NUEVO CONTACTO

            return response()->json(['message' => 'Generado Satisfactorimente']);
        }
        catch(\Exception $e){
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
            $directorioEmpresa = DirectorioEmpresas::findOrFail($id);
            return $directorioEmpresa;
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
        $directorioEmpresa = DirectorioEmpresas::findOrFail($id);
        $directorioEmpresa->delete();

        return response()->json(['message' => 'Eliminado Satisfactorimente']);
    }
}
