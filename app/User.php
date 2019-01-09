<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'owner_id');
    }

    /**
     * function that checks if user is a admin and can perform restricted actions.
     */
    public function isAdmin()
    {
        if ($this->role == 'a') {
            return true;
        } else {
            return false;
        }
    }
}
