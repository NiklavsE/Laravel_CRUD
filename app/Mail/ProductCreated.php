<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProductCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $product; 

    public function __construct($product)
    {
        $this->product = $product;
    }

    public function build()
    {
        return $this->markdown('mail.product-created');
    }
}
