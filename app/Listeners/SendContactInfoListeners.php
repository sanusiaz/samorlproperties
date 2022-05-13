<?php

namespace App\Listeners;

use App\Events\ContactEvents;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class SendContactInfoListeners
{

    /**
     * Handle the event.
     *
     * @param  \App\Events\ContactEvents  $event
     * @return void
     */
    public function handle(ContactEvents $event)
    {
        $contactInfo = $event->contactInfo;

        Mail::to("sanusiabdulazeezadebayo1@yahoo.com")->send(new ContactMail($contactInfo));
    }
}
