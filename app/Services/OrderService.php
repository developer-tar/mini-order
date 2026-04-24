<?php

namespace App\Services;

use App\Models\Item;
use App\Models\Order;
use App\OrderStatus;


class OrderService
{
    public function createOrder($userId, $itemId)
    {
        $item = Item::findOrFail($itemId);
       
        
        return Order::create([  
            'user_id' => $userId,
            'item_id' => $itemId,
            'total_amount' => $item->price,
            'status' => OrderStatus::PENDING
        ]);
    }
    public function updateOrderStatus(Order $order, $status)
    {
        $order->update(['status' => $status]);
        return $order;
    }
}
