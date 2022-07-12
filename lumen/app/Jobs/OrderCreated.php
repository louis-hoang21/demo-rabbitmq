<?php

namespace App\Jobs;

use App\Models\Order;
use Illuminate\Support\Facades\Log;

class OrderCreated extends Job
{
    public $order;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('Order created:' . json_encode($this->order));
    }
}
