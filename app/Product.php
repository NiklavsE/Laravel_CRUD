<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ProductCreated;

class Product extends Model
{
    protected $guarded = [];

    protected $dispatchesEvents = [
        'created' => ProductCreated::class,
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
