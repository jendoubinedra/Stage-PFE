<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EtudiantController extends Controller
{
    public function etudiants()
    {$currentpage="etudiant";
        $etudiants=\App\Models\Etudiant::with('classe')->get();

        return view('etudiants',compact('etudiants',"currentpage"));
    }

    public function searchEtudiantPost(Request $request)
    {
        $etudiants=\App\Models\Etudiant::where('name','like',"%".$request->name."%")->with('classe')->get();

        return view('etudiants',compact('etudiants'));
    }

    public function etudiant($id)
    {$currentpage="etudiant";
        $etudiant=\App\Models\Etudiant::where('id',$id)
                                      ->with('classe')
                                      ->first();
        return view('etudiant',compact('etudiant',"currentpage"));
    }


    public function addEtudiant()
    {$currentpage="etudiant";
        $classes=\App\Models\Classe::all();

        return view('addEtudiant',compact('classes',"currentpage"));
    }

    public function addEtudiantPost(Request $request)
    {
        $etudiantExiste=\App\Models\Etudiant::where('name',$request->name)->first();

        if ($etudiantExiste)
            return redirect()->route('etudiants')->with('ErrorMessage','Un etudiant du même nom existe déjà !');
        else
        {
            $etudiant = new \App\Models\Etudiant();
            $etudiant->name=$request->name;
            $etudiant->cin=$request->cin;
            $etudiant->bio=$request->bio;
            $etudiant->classe_id=$request->classe_id;

            if ($request->hasfile('photo'))
            {
                $file=$request->file('photo');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('img/photos/', $filename);
                $etudiant->photo=$filename;
            }



            $etudiant->save();

            return redirect()->route('etudiants')->with('SuccessMessage','Etudiant ajouté avec succès.');
        }
    }

    public function editEtudiant($id)
    {$currentpage="etudiant";
        //ajouter un test de securité ....
        $etudiant=\App\Models\Etudiant::where('id',$id)->first();
        $classes=\App\Models\Classe::all();

        return view('editEtudiant',compact('etudiant','classes',"currentpage"));
    }

    public function editEtudiantPost(Request $request)
    {
        //ajouter un test de securité ....
        $etudiantExiste=\App\Models\Etudiant::where('name',$request->name)
                                        ->where('id','<>',$request->id)
                                        ->first();
        if ($etudiantExiste)
            return redirect()->route('etudiants')->with('ErrorMessage','Un etudiant du même nom existe déjà !');
        else
        {
            $etudiant=\App\Models\Etudiant::where('id',$request->id)->first();
            $etudiant->name=$request->name;
            $etudiant->cin=$request->cin;
            $etudiant->bio=$request->bio;
            $etudiant->classe_id=$request->classe_id;

            if ($request->hasfile('photo'))
            {
                if (File::exists('img/photos/'.$etudiant->photo))
                {
                    File::delete('img/photos/'.$etudiant->photo);
                }

                $file=$request->file('photo');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('img/photos/', $filename);
                $etudiant->photo=$filename;
            }

            $etudiant->update();
            return redirect()->route('etudiants')->with('SuccessMessage','Etudiant mis à jour avec succès.');;
        }
    }

    public function deleteEtudiant($id)
    {
         // Test  ....
        $currentpage="etudiant";
        $etudiant=\App\Models\Etudiant::where('id',$id)->first();
        return view('deleteEtudiant',compact('etudiant',"currentpage"));
    }

    public function deleteEtudiantPost(Request $request)
    {
        // test ...

        $etudiant=\App\Models\Etudiant::where('id',$request->id)->first();
        $etudiant->delete();

        return redirect()->route('etudiants')->with('SuccessMessage','L\'etudiant a été supprimée avec succès.');

    }

}
