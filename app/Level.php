<?php

namespace App;

use App\Filiere;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function filiere(){
        return
        $this->belongsTo(Filiere::class);
    }
}
