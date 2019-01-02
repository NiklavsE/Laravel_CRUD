<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [ 
        'name',
        'description',
        'price',
        'in_stock'
    ];

    public function tasks() 
    {

        return $this->hasMany(Task::class);
        
    }



}
