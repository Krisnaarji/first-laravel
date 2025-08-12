<?php

namespace App\Policies;

use App\Models\Grid;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class GridPolicy
{
    public function viewAny(User $user): bool
    {
        return false;
    }

    public function view(User $user, Grid $grid): bool
    {
        return false;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Grid $grid): bool
    {
        return false;
    }

    public function delete(User $user, Grid $grid): bool
    {
        return false;
    }

    public function restore(User $user, Grid $grid): bool
    {
        return false;
    }

    public function forceDelete(User $user, Grid $grid): bool
    {
        return false;
    }
}
