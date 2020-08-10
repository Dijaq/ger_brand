<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DirectorioCategorias;

class DirectorioCategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directorioCategorias = DirectorioCategorias::all();
        return $directorioCategorias;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            $directorioCategorias = new DirectorioCategorias();
            $directorioCategorias->nombre = $request->nombre;
            $directorioCategorias->save();

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
            $directorioCategorias = DirectorioCategorias::findOrFail($id);
            return $directorioCategorias;
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
        $directorioCategorias = DirectorioCategorias::findOrFail($id);
        $directorioCategorias->nombre = $request->nombre;
        $directorioCategorias->update();

        return response()->json(['message' => 'Modificado Satisfactorimente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $directorioCategorias = DirectorioCategorias::findOrFail($id);
        $directorioCategorias->delete();

        return response()->json(['message' => 'Eliminado Satisfactorimente']);
    }
}
