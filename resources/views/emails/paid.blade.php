<h2>Congratulatiopns Order Paid</h2>
<p>Dear {{ $order->user->name }},</p>
<p>Your order has been paid  successfully</p>
<p>Order details:</p>
<ul>
    <li>Order ID: {{ $order->id }}</li>
    <li>Order Date: {{ $order->created_at->format('Y-m-d H:i:s') }}</li>
    <li>Total Amount: ${{ number_format($order->total, 2) }}</li>
</ul>
<p>you will receive a your package soon.</p>