<?php

namespace App\Http\Controllers;

use App\Models\Space;
use Illuminate\Http\Request;

class SpaceApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$space=Space::all();
      return Space::paginate(4);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $space=Space::select()->find($request->id);
        if(!space){
            return
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Space  $space
     * @return \Illuminate\Http\Response
     */
    public function show(Space $space)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Space  $space
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Space $space)
    {
       $space->update=($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Space  $space
     * @return \Illuminate\Http\Response
     */
    public function destroy(Space $space)
    {
        $space->delete();
    }
}
