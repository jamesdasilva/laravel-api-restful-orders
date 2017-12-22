<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Product::create([
            'name' => 'nome '.str_random(10),
            'price' => 10.2
        ]);

        App\Product::create([
            'name' => 'nome '.str_random(10),
            'price' => 11.45
        ]);

        App\Product::create([
            'name' => 'nome '.str_random(10),
            'price' => 76.27
        ]);

        App\Product::create([
            'name' => 'nome '.str_random(10),
            'price' => 101.45
        ]);

        App\Product::create([
            'name' => 'nome '.str_random(10),
            'price' => 36.14
        ]);
    }
}
