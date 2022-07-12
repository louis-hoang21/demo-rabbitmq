<?php

namespace App\Events;

use App\Models\Order;

class OrderShipped extends Event
{
    public $order;
    public function __construct(Order $order)
    {
        $this->order = $order;
    }
}
