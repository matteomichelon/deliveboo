<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\Product;
use Faker\Generator as Faker;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        for ($i = 0; $i < 200; $i++) {
            $order_rand = rand(0, 15);
            $product=Product::all();

            $new_order = new Order;
            $new_order->code = $faker->regexify('[A-Z]{5}[0-4]{5}');
            $new_order->price = $faker->randomFloat(2, 3, 100);
            $new_order->status = '1';
            $new_order->date = $faker->dateTimeBetween($startDate = '-6 years', $endDate = 'now', $timezome = 'Europe/Rome');
            $new_order->address = $faker->address();
            $new_order->name = $faker->firstName();
            $new_order->surname = $faker->lastName();
            $new_order->email = $faker->email();
            $new_order->notes = $faker->text(50);
            $new_order->telephone_number = $faker->phoneNumber();
            $new_order->save();

            for ($j = 0; $j < $order_rand; $j++) {
                $new_order->products()->attach($product[rand(0, 199)]);
            }

            
        }
    }
}
