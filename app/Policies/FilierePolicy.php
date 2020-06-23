<?php

namespace App\Policies;

use App\Filiere;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FilierePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Filiere  $filiere
     * @return mixed
     */
    public function view(User $user, Filiere $filiere)
    {
        return
        $user->filiere_id === $filiere->id ; 
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Filiere  $filiere
     * @return mixed
     */
    public function update(User $user, Filiere $filiere)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Filiere  $filiere
     * @return mixed
     */
    public function delete(User $user, Filiere $filiere)
    {
        return false;
    }

}