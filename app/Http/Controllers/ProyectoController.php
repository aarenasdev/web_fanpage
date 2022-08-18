<?php

namespace App\Http\Controllers;

use App\proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {

        //consultar el modelo y traer una variable
        $datos=proyecto::all();
        //$(se crea una variable)=(se llama el modelo)::(tipos de consultas) (all() me trae toda la info de la DB)
        
        //compact('pedido') es para enviarle  la variable  a la vista 
        //para llamar la vista 

        return view('proyecto.admi',compact('datos'));
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
        
            $request->validate([ 
          
             'nombre'=> 'required',
             'apellidos'=> 'required',
             'ciudad'=> 'required',
             'celular'=> 'required',
     
            ]); 
     
     
            proyecto::create($request->all());
            return redirect()->route('admi.index');
     
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(proyecto $proyecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $actualizar= $request->except(['_token','_method']);
        proyecto::where(['id'=>$id])->update($actualizar);
        return redirect()->route('admi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        proyecto::destroy($id);
        
        return redirect()->route('admi.index');
    }
}
