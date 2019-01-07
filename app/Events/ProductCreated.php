<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;


class ProductCreated
{
    use Dispatchable,  SerializesModels;

    public $product;

    public function __construct($product)
    {
        $this->product = $product;
    }
}