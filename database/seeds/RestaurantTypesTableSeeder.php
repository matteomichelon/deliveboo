<?php

use Illuminate\Database\Seeder;
use App\RestaurantType;

class RestaurantTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurant_types = [
            [
                'restaurant_type' => 'Italiano'
            ],
            [
                'restaurant_type' => 'Cinese'
            ],
            [
                'restaurant_type' => 'Giapponese'
            ],
            [
                'restaurant_type' => 'Americano'
            ],
            [
                'restaurant_type' => 'Messicano'
            ],
            [
                'restaurant_type' => 'Indiano'
            ],
            [
                'restaurant_type' => 'Internazionale'
            ],
            [
                'restaurant_type' => 'Pesce'
            ],
            [
                'restaurant_type' => 'Carne'
            ],
            [
                'restaurant_type' => 'Pizza'
            ],
            [
                'restaurant_type' => 'Halal'
            ],
            [
                'restaurant_type' => 'Fast Food'
            ],
            [
                'restaurant_type' => 'Pasticceria'
            ],
            [
                'restaurant_type' => 'Gelateria'
            ]
        ];


        foreach($restaurant_types as $restaurant_type) {
            $new_restaurant_type = new RestaurantType;
            $new_restaurant_type->restaurant_type = $restaurant_type['restaurant_type'];
            $new_restaurant_type->save();
        }


    }
}
