<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    //protected $table="mesetudiants";
    public $timestamps = false;


    public function classe()
    {
        return $this->belongsTo(\App\models\Classe::class);
    }

    
}
