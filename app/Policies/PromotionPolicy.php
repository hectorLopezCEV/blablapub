<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Promotion;
use Illuminate\Auth\Access\HandlesAuthorization;

class PromotionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any promotions.
     *
     * @param  User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the promotion.
     *
     * @param  User  $user
     * @param  Promotion  $promotion
     * @return mixed
     */
    public function view(User $user, Promotion $promotion)
    {
        if ($promotion->published) {
            return true;
        }

        // Visitors cannot view unpublished promotions
        if ($user === null) {
            return false;
        }

        // Admin overrides published status
        if ($user->hasRole('Admin')) {
            return true;
        }

        if ($user->can('view promotions')) {
            return true;
        }

        // Authors can view their own unpublished promotions
        return $user->id === $promotion->user_id;
    }

    /**
     * Determine whether the user can create promotions.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->can('create promotions')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can update the promotion.
     *
     * @param  User  $user
     * @param  Promotion  $promotion
     * @return mixed
     */
    public function update(User $user, Promotion $promotion)
    {
        if ($user->can('update promotions')) {
            return true;
        }

        return $user->id === $promotion->user_id;
    }

    /**
     * Determine whether the user can delete the promotion.
     *
     * @param  User  $user
     * @param  Promotion  $promotion
     * @return mixed
     */
    public function delete(User $user, Promotion $promotion)
    {
        if ($user->can('delete promotions')) {
            return true;
        }

        return $user->id === $promotion->user_id;
    }

    /**
     * Determine whether the user can restore the promotion.
     *
     * @param  User  $user
     * @param  Promotion  $promotion
     * @return mixed
     */
    public function restore(User $user, Promotion $promotion)
    {
        if ($user->can('restore promotions')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can permanently delete the promotion.
     *
     * @param  User  $user
     * @param  Promotion  $promotion
     * @return mixed
     */
    public function forceDelete(User $user, Promotion $promotion)
    {
        if ($user->can('force delete promotions')) {
            return true;
        }

        return false;
    }
}
