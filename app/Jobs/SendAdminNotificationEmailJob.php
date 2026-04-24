<?php

namespace App\Jobs;

use App\Mail\AdminNotificationMail;
use App\Models\Order;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Mail;

class SendAdminNotificationEmailJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Order $order)
    {
        
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        sleep(5); // Simulate a delay for sending the email beacuse for testing free accoutn of mailtrap has a limit of 1 email per second
        Mail::to(config('mail.admin_email'))->send(new AdminNotificationMail($this->order));
    }
}
