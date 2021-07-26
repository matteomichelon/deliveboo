<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\Product;
use App\User;
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

        $users = User::all();

        foreach($users as $user) {

            for ($i = 0; $i < 20; $i++) {                            
                $new_order = new Order;
                $new_order->code = $faker->regexify('[A-Z]{5}[0-4]{5}');            
                $new_order->price = $faker->randomFloat(2, 3, 100);
                $new_order->status = '1';
                $new_order->date = $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezome = 'Europe/Rome');
                $new_order->address = $faker->address();
                $new_order->name = $faker->firstName();
                $new_order->surname = $faker->lastName();
                $new_order->email = $faker->email();
                $new_order->notes = $faker->text(50);
                $new_order->telephone_number = $faker->phoneNumber();  
                $new_order->user_id = $user->id;  
                $new_order->save();        
                
    
                // for ($j = 0; $j < $order_rand; $j++) {
                //     $rand_user = $users[rand(0, count($users))];
    
                //     $products = $rand_user->products;
    
                //     $new_order->products()->attach($product[$rand_product]);
    
                //     $rand_product_user_id = $rand_product->user->id;                
                // }
    
                
                // Random User and his products
                // $rand_user = $users[rand(0, count($users))];
    
                // Saving user_id of rand user
                // $new_order->user_id =  $rand_user->id;
    
                // Preparing Products for sync
                $user_products = $user->products;
    
                $random_products = [];
                $j = rand(1, 5);
    
                for($y = 0; $y < $j; $y++) {
                    // Random product from user
                    $random_product = $user_products[rand(0, count($user_products) - 1)];                
    
                    $random_products[$random_product->id] = rand(1, 3);

                }        
                                

                $random_products_with_quantity = [];
                foreach($random_products as $product_id=>$quantity) {
    
                    $random_products_with_quantity[$product_id] = [
                        'quantity' => $quantity,
                    ];
                }
                
                
                // Sync dei prodotti
                $new_order->products()->sync($random_products_with_quantity);                                 
                                            
            }

        }
        
    }
}
