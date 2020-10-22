<?php

use App\productline;
use Illuminate\Database\Seeder;

class productlinseseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(productline::class,10)->create();

    }
}
