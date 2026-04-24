<?php

namespace App\Listeners;

use App\Jobs\SendPaidOrderJob;
use App\Jobs\SendShipmentEmailJob;
use App\OrderStatus;
use App\Events\OrderStatusChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendShipmentEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderStatusChanged $event): void
    {
        $order = $event->order;
        if ($order->status === OrderStatus::SHIPPED) {
          dispatch(new SendShipmentEmailJob($order));
        }

        if ($order->status === OrderStatus::PAID) {
          dispatch(new SendPaidOrderJob($order));
        }
    }
}
