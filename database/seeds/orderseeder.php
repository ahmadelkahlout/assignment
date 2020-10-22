<?php

use App\order;
use Illuminate\Database\Seeder;

class orderseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(order::class,10)->create();

    }
}
