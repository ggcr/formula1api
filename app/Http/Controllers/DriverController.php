<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Driver::all();
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
            'name' => 'required',
            'apodo' => '',
            'nationality' => 'required',
            'number' => 'required',
            'number_url' => 'required',
            'image_url' => 'required'
        ]);
        return Driver::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Driver::find($id);
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
        $d = Driver::find($id);
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
        $queryRes = Driver::destroy($id);
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
        return Driver::where('name', 'like', '%'.$name.'%')->get();
    }
}
