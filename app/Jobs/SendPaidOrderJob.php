<?php

namespace App\Jobs;

use App\Mail\PaidMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Mail;

class SendPaidOrderJob implements ShouldQueue
{
    use Queueable;

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
         Mail::to($this->order->user->email)->send(new PaidMail($this->order));
    }
}
