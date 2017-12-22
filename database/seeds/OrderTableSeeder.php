<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Order::create([
            'product_id' => 1,
            'product_user_id' => 2,
            'date' => Carbon::parse('2017-11-01'),
            'quantity' => 1
        ]);

        App\Order::create([
            'product_id' => 3,
            'product_user_id' => 1,
            'date' => Carbon::parse('2017-11-06'),
            'quantity' => 1
        ]);

        App\Order::create([
            'product_id' => 2,
            'product_user_id' => 1,
            'date' => Carbon::parse('2017-11-07'),
            'quantity' => 1
        ]);
    }
}
