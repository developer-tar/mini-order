<?php

namespace App;

enum OrderStatus :string
{
    case PENDING = 'pending';
    case PAID = 'paid';
    case SHIPPED = 'shipped';
}
