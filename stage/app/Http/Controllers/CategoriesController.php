<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie=Categories::all();
        return view('index',compact('categorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $categorie=new Categories();
        $categorie->nom=$request->nom;
        $categorie->save();
        return redirect('/categories')->with('success', 'votre categories ajouter  avec succèss');
       
        /* Categories::create([
         'nom'=>$request->nom,
        ]);
        dd('categori ajouter'); */
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
        $categorie=categories::findorFail($id);
        return view('edicat',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {$categorie = $request->validate([
        'nom' => 'required|max:255',
        
    ]);
    Categories::whereId($id)->update($categorie);

        //$categorie=new Categories();
        //$categorie->nom=$request->nom;
        //categrories:: whereId($id)->update('categorie');
        ///return view('/categories',compcat('categorie'));
        return redirect ('/categories')->with('SuccessMessage','Etudiant mis à jour avec succès.');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categories::findOrFail($id);
        $categorie->delete();

        return redirect('/categories')->with('success', 'Voiture supprimer avec succèss');

        //$categorie=Categories::where('id',$id);
        //return view('index',compact('categorie'));
     
    }
}
