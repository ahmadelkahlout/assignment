<?php

use App\payment;
use Illuminate\Database\Seeder;

class paymentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(payment::class,10)->create();

    }
}
