<?php

use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++){
            \DB::table('restaurants')->insert([
                'name' => 'Restaurant'.$i,
                'description' => 'TIPORestaurant'.$i,
            ]);
        }
    }
}
