<h2>new order received</h2>

<p>A new order has been placed</p>
<p>Order details:</p>
<ul>
    <li>Order ID: {{ $order->id }}</li>
    <li>User: {{ $order->user->name }}</li>
    <li>Total Amount: {{ $order->total_amount }}</li>
</ul>