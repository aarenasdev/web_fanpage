<?php

namespace App\Http\Controllers;

use App\trabajo;
use Illuminate\Http\Request;

class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=trabajo::all();


        return view ('trabajo.inicio',compact('datos'));
 





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
     
            'nombre_usuer'=> 'required',
            'tipo_vehiculos'=> 'required',
            'fecha_lavado'=> 'required',
            'empleado'=> 'required',
            'valor'=> 'required'
    
           ]); 
    
    
           trabajo::create($request->all());
           return redirect()->route('trabajo.index');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function show(trabajo $trabajo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function edit(trabajo $trabajo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEstudiantes= $request->except(['_token','_method']);
        trabajo::where(['id'=>$id])->update($datosEstudiantes);
        return redirect()->route('trabajo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        trabajo::destroy($id);
        
        return redirect()->route('trabajo.index');
    }
}
