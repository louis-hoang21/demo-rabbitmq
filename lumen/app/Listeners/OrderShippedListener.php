<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class OrderShippedListener implements ShouldQueue
{
    public $connection = "rabbitmq_direct";

    public function __construct()
    {

    }
    /**
     * Handle the event.
     *
     * @param  $event
     * @return void
     */
    public function handle($event)
    {
        Log::info('Order shipped from e-store:' . json_encode($event));
    }
}
