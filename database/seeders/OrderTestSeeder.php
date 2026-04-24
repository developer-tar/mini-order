<?php

namespace Database\Seeders;

use App\Services\OrderService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Jobs\SendAdminNotificationEmailJob;
use App\Jobs\SendOrderConfirmationJob;

class OrderTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $user = \App\Models\User::first();
        $item = \App\Models\Item::first();
        $service  = app(OrderService::class);

        $order = $service->createOrder($user->id, $item->id);
        echo "Created Order ID: " . $order->id . "\n";

    //   dispatch(new SendOrderConfirmationJob($order));
    // dispatch(new SendAdminNotificationEmailJob($order));

    // $service->updateOrderStatus($order, 'paid');
    // echo "Updated Order Status to: " . $order->status . "\n";
    }
}
