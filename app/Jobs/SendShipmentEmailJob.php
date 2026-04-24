<?php

namespace App\Jobs;

use App\Listeners\SendShipmentEmail;
use App\Mail\ShipmentMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Mail;

class SendShipmentEmailJob implements ShouldQueue
{
    use Queueable, Dispatchable;

    /**
     * Create a new job instance.
     */
    public $order;


    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
         Mail::to($this->order->user->email)->send(new ShipmentMail($this->order));
    }
}
