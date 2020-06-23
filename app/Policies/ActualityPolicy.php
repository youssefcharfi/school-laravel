<?php

namespace App\Policies;

use App\Actuality;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActualityPolicy
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
     * @param  \App\Actuality  $actuality
     * @return mixed
     */
    public function view(User $user, Actuality $actuality)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return
        $user->isAdmin;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Actuality  $actuality
     * @return mixed
     */
    public function update(User $user, Actuality $actuality)
    {
        return
        $user->id === $actuality->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Actuality  $actuality
     * @return mixed
     */
    public function delete(User $user, Actuality $actuality)
    {
        return
        $user->id === $actuality->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Actuality  $actuality
     * @return mixed
     */
    public function restore(User $user, Actuality $actuality)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Actuality  $actuality
     * @return mixed
     */
    public function forceDelete(User $user, Actuality $actuality)
    {
        //
    }
}
