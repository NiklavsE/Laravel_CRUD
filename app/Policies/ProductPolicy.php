<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Product;

class ProductPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Product $product)
    {
        if ($user->isAdmin()) {
            return true;
        } else {
            return $product->owner_id == $user->id;
        }
    }

    public function update(User $user, Product $product)
    {
        if ($user->isAdmin()) {
            return true;
        } else {
            return $product->owner_id == $user->id;
        }
    }

    public function delete(User $user, Product $product)
    {
        if ($user->isAdmin()) {
            return true;
        } else {
            return $product->owner_id == $user->id;
        }
    }

    public function list(User $user)
    {
        if ($user->isAdmin()) {
            return true;
        } else {
            return false;
        }
    }
}
