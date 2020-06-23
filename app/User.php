<?php

namespace App;

use App\Filiere;
use App\Actuality;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    public function actualities(){
        return 
        $this->hasMany(Actuality::class);
    }

    public function filiere(){
        return
        $this->belongsTo(Filiere::class);
    }

    public function image(){
        return
        $this->morphOne(Image::class,'imageable');
    }

    public function absences(){
        return
        $this->hasMany(Absence::class);
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','filiere_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
