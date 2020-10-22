<?php

use App\order_product;
use Illuminate\Database\Seeder;

class order_productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(order_product::class,10)->create();

    }
}
