<?php

namespace App;

use App\User;
use App\Level;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    public function users(){
        return
        $this->hasMany(User::class);
    }

    public function levels(){
        return
        $this->hasMany(Level::class);
    }

    public function matieres(){
        return
        $this->belongsToMany(Matiere::class);
    }
}
