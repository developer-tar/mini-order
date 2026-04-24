<?php

use App\Http\Middleware\ValidateOrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\OrderController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware(ValidateOrderRequest::class)->post('/orders', [OrderController::class, 'store']);

Route::patch('/orders/{order}/status', [OrderController::class, 'updateStatus']);



// POST /api/orders
// {
//     "user_id": 1,
//     "item_id": 1,
//     "total_amount": 100.00
// }

// PATCH /api/orders/1/status
// {
//     "status": "shipped"     
// }