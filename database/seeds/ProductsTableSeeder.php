<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Riso alla Cantonese',
                'description' => 'Risotto tipico cinese molto buono.',
                'price' => 10.50,
                'visibility' => 1,
                'cover' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/1dd71a6b-bd81-4a7a-8013-114c731d1165/Derivates/21db79a0-9d69-44d2-8852-6945bc8fc0de.jpg',
                'user_id' => 2                
            ],
            [
                'name' => 'Pizza Margherita',
                'description' => 'La pizza più famosa e più buona del mondo.',
                'price' => 6.50,
                'visibility' => 1,
                'cover' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Pizza-napoletana.jpg/1200px-Pizza-napoletana.jpg',
                'user_id' => 1
            ]
        ];

        foreach($products as $product) {
            $new_product = new Product;

            $new_product->name = $product['name'];
            $new_product->description = $product['description'];
            $new_product->price = $product['price'];
            $new_product->visibility = $product['visibility'];
            $new_product->cover = $product['cover'];
            $new_product->user_id = $product['user_id'];
            
            $new_product->save();
        }
    }
}
