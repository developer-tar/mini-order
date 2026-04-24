<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderStatusRequest;
use App\Models\Order;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $orderService;
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    public function store(StoreOrderRequest $request)
    {
        try {
            $order = $this->orderService->createOrder($request->input('user_id'), $request->input('item_id'));
            return response()->json(['message' => 'Order created successfully', 'order' => $order], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create order', 'error' => $e->getMessage()], 500);
        }
    }
    public function updateStatus(UpdateOrderStatusRequest $request, Order $order)
    {
        try {
            $order = $this->orderService->updateOrderStatus($order, $request->input('status'));
            return response()->json(['message' => 'Order status updated successfully', 'order' => $order], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to update order status', 'error' => $e->getMessage()], 500);
        }
    }
}
