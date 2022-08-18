<?php

namespace App\Http\Controllers;

use App\parcialnoche;
use Illuminate\Http\Request;

class ParcialnocheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos=parcialnoche::all();

        return view('parcialnoche.inicio',compact('datos'));
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
     * @param  \App\parcialnoche  $parcialnoche
     * @return \Illuminate\Http\Response
     */
    public function show(parcialnoche $parcialnoche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\parcialnoche  $parcialnoche
     * @return \Illuminate\Http\Response
     */
    public function edit(parcialnoche $parcialnoche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\parcialnoche  $parcialnoche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, parcialnoche $parcialnoche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\parcialnoche  $parcialnoche
     * @return \Illuminate\Http\Response
     */
    public function destroy(parcialnoche $parcialnoche)
    {
        //
    }
}
