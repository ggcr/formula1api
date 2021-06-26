<?php

namespace App\Http\Controllers;

use App\Models\Races;
use Illuminate\Http\Request;

class RacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d = Races::all();
        return Races::all();
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
            'race_name' => 'required',
            'circuit_name' => 'required',
            'season' => 'required',
            'date' => 'required',
            'race_results' => 'required',
            'qualy_results' => 'required'
        ]);
        return Races::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Races  $races
     * @return \Illuminate\Http\Response
     */
    public function show(Races $races)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Races  $races
     * @return \Illuminate\Http\Response
     */
    public function edit(Races $races)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Races  $races
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Races $races)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Races  $races
     * @return \Illuminate\Http\Response
     */
    public function destroy(Races $races)
    {
        //
    }
}
