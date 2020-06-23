<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    public function filieres(){
        return
        $this->belongsToMany(Filiere::class);
    }

    public function absences(){
        return
        $this->hasMany(Absence::class);
    }

    
}
