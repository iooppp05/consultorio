<?php

use Illuminate\Database\Seeder;

class PaymentDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PaymentDetail::class, 10)->create();
    }
}
