<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Model::unguard();

        $this->call(ProductTableSeeder::class);
        $this->call(ProductUserTableSeeder::class);
        $this->call(OrderTableSeeder::class);

        Model::reguard();
    }
}
