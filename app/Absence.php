<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $fillable = ['matiere_id','user_id'];

    public function user(){
        return
        $this->belongsTo(User::class);
    }

    public function matiere(){
        return
        $this->belongsTo(Matiere::class);
    }
}
