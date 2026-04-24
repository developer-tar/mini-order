<?php

namespace App\Observers;

use App\Events\OrderStatusChanged;
use App\Jobs\SendAdminNotificationEmailJob;
use App\Jobs\SendOrderConfirmationJob;
use App\Models\Order;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     */
    public function created(Order $order): void
    {
    dispatch(new SendOrderConfirmationJob($order));
    dispatch(new SendAdminNotificationEmailJob($order));
    }

    /**
     * Handle the Order "updated" event.
     */
    public function updated(Order $order): void
    {
        if ($order->isDirty('status')) {

            event(new OrderStatusChanged($order));
        }
    }

    /**
     * Handle the Order "deleted" event.
     */
    public function deleted(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     */
    public function restored(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     */
    public function forceDeleted(Order $order): void
    {
        //
    }
}
