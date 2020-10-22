<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(customerSeeder::class);
        $this->call(employeeSeeder::class);
        $this->call(officeseeder::class);
        $this->call(order_productseeder::class);
        $this->call(orderseeder::class);
        $this->call(paymentseeder::class);
        $this->call(productlinseseeder::class);
        $this->call(productseeder::class);
    }
}
