<?php

use App\office;
use Illuminate\Database\Seeder;

class officeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(office::class,10)->create();

    }
}
