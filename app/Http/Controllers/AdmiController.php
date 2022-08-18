<?php

namespace App\Http\Controllers;

use App\Admi;
use Illuminate\Http\Request;

class AdmiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=admi::all();
        return view('admi',compact('datos'));

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
            'celular'=> 'required',
            'ciudad'=> 'required',
            
    
           ]); 
    
    
           Admi::create($request->all());
           return redirect()->route('admini.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admi  $admi
     * @return \Illuminate\Http\Response
     */
    public function show(Admi $admi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admi  $admi
     * @return \Illuminate\Http\Response
     */
    public function edit(Admi $admi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admi  $admi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $actualizar= $request->except(['_token','_method']);
        admi::where(['id'=>$id])->update($actualizar);
        return redirect()->route('admini.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admi  $admi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        admi::destroy($id);
        
        return redirect()->route('admini.index');
    }
}
