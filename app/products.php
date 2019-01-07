<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Mail;
use App\Events\ProductCreated;

class products extends Model
{
    protected $guarded = [];

    protected $dispatchesEvents = [
        'created' => ProductCreated::class
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
