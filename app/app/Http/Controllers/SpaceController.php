<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $space=\App\Models\Space::all();
        return view('liste',compact('space'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demander');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $space =new \App\Models\Space();
       $space->nomsalle=$request->nomsalle;
       $space->description=$request->description;
       $space->save();
       return redirect()->route('index')->with('SuccessMessage','ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $space=\App\Models\Space::findorFail($id);
            return view('edit',compact('space'));
        }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $space=\App\Models\Space::where('id',$request->id)->first();
            $space->nomsalle=$request->nomsalle;
            $space->description=$request->description;
            $space->update();
            return redirect()->route('index')->with('SuccessMessage','mis a jour');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $space=\App\Models\Space::findorFail($id);
        $space->delete();
        return redirect()->route('index')->with('ErrorMessage','supprimer');
    }
}
