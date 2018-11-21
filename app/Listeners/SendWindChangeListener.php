<?php

namespace App\Listeners;

use App\Events\WindChanged;
use App\Mail\SendWindChangeMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendWindChangeListener
{
    private $emailAddress;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->emailAddress = env('EMAIL_ADDRESS');
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(WindChanged $event)
    {
//        Mail::to($this->emailAddress)->send(new SendWindChangeMail($event->type));
    }
}
