<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Place;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlacePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any places.
     *
     * @param  User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {

    }

    /**
     * Determine whether the user can view the place.
     *
     * @param  User  $user
     * @param  Place  $place
     * @return mixed
     */
    public function view(User $user, Place $place)
    {
        if ($place->published) {
            return true;
        }

        // Visitors cannot view unpublished places
        if ($user === null) {
            return false;
        }

        // Admin overrides published status
        if ($user->hasRole('Admin')) {
            return true;
        }

        if ($user->can('view places')) {
            return true;
        }

        // Authors can view their own unpublished places
        return $user->id === $place->user_id;
    }

    /**
     * Determine whether the user can create places.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->can('create places')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can update the place.
     *
     * @param  User  $user
     * @param  Place  $place
     * @return mixed
     */
    public function update(User $user, Place $place)
    {
        if ($user->can('update places')) {
            return true;
        }

        return $user->id === $place->user_id;
    }

    /**
     * Determine whether the user can delete the place.
     *
     * @param  User  $user
     * @param  Place  $place
     * @return mixed
     */
    public function delete(User $user, Place $place)
    {
        if ($user->can('delete places')) {
            return true;
        }

        return $user->id === $place->user_id;
    }

    /**
     * Determine whether the user can restore the place.
     *
     * @param  User  $user
     * @param  Place  $place
     * @return mixed
     */
    public function restore(User $user, Place $place)
    {
        if ($user->can('restore places')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can permanently delete the place.
     *
     * @param  User  $user
     * @param  Place  $place
     * @return mixed
     */
    public function forceDelete(User $user, Place $place)
    {
        if ($user->can('force delete places')) {
            return true;
        }

        return false;
    }
}
