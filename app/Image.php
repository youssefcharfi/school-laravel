<?php

namespace App;

use App\Actuality;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path'];

    public function imageable(){
        return 
        $this->morphTo();
    }

}
