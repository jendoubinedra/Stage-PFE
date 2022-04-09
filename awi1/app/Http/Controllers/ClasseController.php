<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function classes()
    {
        $currentpage="classe";
        $classes=\App\Models\Classe::with('etudiants')->get();
        return view('classes',compact('classes',"currentpage"));
    }

    public function classe($id)
    {
        $currentpage="classe";
        $classe=\App\Models\classe::where('id',$id)
                                      ->with('etudiants')
                                      ->first();
        return view('classe',compact('classe',"currentpage"));
    }

    public function addClasse()
    {
        $currentpage="classe";
        return view('addClasse',compact("currentpage"));
    }

    public function addClassePost(Request $request)
    {
        $currentpage="classe";
        $classeExiste=\App\Models\Classe::where('nom',$request->nom)->first();

        if ($classeExiste)
            return redirect()->route('classes')->with('ErrorMessage','Une classe du même nom existe déjà !');
        else
        {
            $classe = new \App\Models\Classe();
            $classe->nom=$request->nom;
            $classe->description=$request->description;
            $classe->save();
            return redirect()->route('classes')->with('SuccessMessage','Classe ajoutée avec succès.');
        }
    }

    public function editClasse($id)
    {
        $currentpage="classe";
        //ajouter un test de securité ....
        $classe=\App\Models\Classe::where('id',$id)->first();
        return view('editClasse',compact('classe',"currentpage"));
    }

    public function editClassePost(Request $request)
    {

        //ajouter un test de securité ....
        $classeExiste=\App\Models\Classe::where('nom',$request->nom)
                                        ->where('id','<>',$request->id)
                                        ->first();
        if ($classeExiste)
            return redirect()->route('classes')->with('ErrorMessage','Une classe du même nom existe déjà !');
        else
        {
            $classe=\App\Models\Classe::where('id',$request->id)->first();
            $classe->nom=$request->nom;
            $classe->description=$request->description;
            $classe->update();
            return redirect()->route('classes')->with('SuccessMessage','Classe mise à jour avec succès.');;
        }
    }

    public function deleteClasse($id)
    {
         // Test  ....
        $currentpage="classe";
        //verifier si la classe est vide;

        $classe=\App\Models\Classe::where('id',$id)->with('etudiants')->first();

        if ($classe->etudiants->count())
            return redirect()->route('classes')->with('ErrorMessage',"La classe n'est pas vide !");
        else
            return view('deleteClasse',compact('classe',"currentpage"));
    }

    public function deleteClassePost(Request $request)
    {
         // test ...
        $classe=\App\Models\Classe::where('id',$request->id)->first();
        $classe->delete();

        return redirect()->route('classes')->with('SuccessMessage','La classe a été supprimée avec succès.');

    }
}
