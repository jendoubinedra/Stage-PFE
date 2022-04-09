<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create(){
        return view('calender');
    }
    public function store(){
       $event= new App\Models \Event();
       $event->titre=$request->titre;
       $event->couleur=$request->couleur;
       $event->start_date=$request->start_date;
       $event->end_date=$request->end_date;
       $event->save();
    }
}
