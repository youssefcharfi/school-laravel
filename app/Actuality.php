<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Actuality extends Model
{
    protected $fillable = ['title','content','user_id'];


    public function user(){
        return
        $this->belongsTo(User::class);
    }

    public function image(){
        return 
        $this->morphOne(Image::class,'imageable');
    }
}
