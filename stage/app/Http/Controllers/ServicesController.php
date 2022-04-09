<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = Services::all();

        return view('indexservices', compact('test'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addservices');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
       
        $validatedData=$request->validate([
            'nom_s'=>'required|max:255',
            'description'=>'required|max:255',
            'image'=>'required|max:255',
            'prix'=>'required|max:100',
            'categorie'=>'required|max:255',
        ]);

         if ($request->hasfile('photo'))
         {
             $file=$request->file('photo');
             $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('public/image/', $filename);
             $service->photo=$filename;
         }
        
        $service = services::create($validatedData);

        return redirect('/services')->with('success', 'services ajouter avec succèss');
    
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
        $services = services::findOrFail($id);

        return view('editservices', compact('services'));
    
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
        $validatedData = $request->validate([
            'nom_s'=>'required|max:255',
            'description'=>'required|max:255',
            'image'=>'required|max:255',
            'prix'=>'required|max:100',
            'categorie'=>'required|max:255',
            
        ]);
        if ($request->hasfile('photo'))
         {
             $file=$request->file('photo');
             $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('public/image/', $filename);
             $service->photo=$filename;
         }
    
        services::whereId($id)->update($validatedData);
    
        return redirect('/services')->with('success', 'services mise à jour avec succèss');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $services = services::findOrFail($id);
        $services->delete();
    
        return redirect('/servicess')->with('success', 'services supprimer avec succèss');
    
    }
}
