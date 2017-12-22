<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\ProductUser::create([
            'name' => 'nome '.str_random(10)
        ]);

        App\ProductUser::create([
            'name' => 'nome '.str_random(10)
        ]);

        App\ProductUser::create([
            'name' => 'nome '.str_random(10)
        ]);

        App\ProductUser::create([
            'name' => 'nome '.str_random(10)
        ]);

        App\ProductUser::create([
            'name' => 'nome '.str_random(10)
        ]);
    }
}
