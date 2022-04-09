<?php

namespace App\Models;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;
    protected $fillabel = ['nomsalle','description'];
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
