<?php

namespace App\Console\Commands;

use App\Events\OrderShipped;
use App\Models\Order;
use Illuminate\Console\Command;

class ShipOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:ship';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ship a order';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $order = Order::inRandomOrder()->first();

        event(new OrderShipped($order));
        $this->line('ship order thành công');
    }
}
