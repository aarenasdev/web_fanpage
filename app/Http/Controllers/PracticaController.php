<?php

namespace App\Http\Controllers;

use App\practica;
use Illuminate\Http\Request;

class PracticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $info=practica::all();


        return view('practica.uno' );
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\practica  $practica
     * @return \Illuminate\Http\Response
     */
    public function show(practica $practica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\practica  $practica
     * @return \Illuminate\Http\Response
     */
    public function edit(practica $practica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\practica  $practica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, practica $practica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\practica  $practica
     * @return \Illuminate\Http\Response
     */
    public function destroy(practica $practica)
    {
        //
    }
}
