<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $fillable = ['nom_s','description','image', 'prix','categorie'];
}
