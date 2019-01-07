<?php

namespace App\Listeners;

use App\Events\ProductCreated;
use App\Mail\ProductCreated as ProductCreatedMail;
use Illuminate\Support\Facades\Mail;


class SendProductCreatedNotification
{
    public function __construct()
    {
        //
    }

    public function handle(ProductCreated $event)
    {
        Mail::to($event->product->owner->email)->send(
            new ProductCreatedMail($event->product)
        );
    }
}
