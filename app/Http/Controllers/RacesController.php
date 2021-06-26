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
            'country' => 'required',
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Races::find($id);
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
        $d = Races::find($id);
        $d->update($request->all());
        return $d;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $queryRes = Races::destroy($id);
        if($queryRes == 1) {
            return response()->json(['success' => 'success'], 200);
        }
        return response()->json(['not found' => 'not found'], 401);
    }

    /**
     * Search for a name.
     *
     * @param  str name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Races::where('race_name', 'like', '%'.$name.'%')->get();
    }
}
