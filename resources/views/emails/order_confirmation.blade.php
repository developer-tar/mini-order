<h2>Order confirmation</h2>
<p>Dear {{ $order->user->name }},</p>
<p>Your order has been successfully placed</p>
<p>Order details:</p>
<ul>
    <li>Order ID: {{ $order->id }}</li>
    <li>Order Date: {{ $order->created_at->format('Y-m-d H:i:s') }}</li>
    <li>Total Amount: {{ $order->total_amount }}</li>
</ul>