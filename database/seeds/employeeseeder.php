<?php

use App\employee;
use Illuminate\Database\Seeder;

class employeeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(employee::class,10)->create();
    }
}
