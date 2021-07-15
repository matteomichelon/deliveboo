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
                'description' => 'Riso tipico cinese saltato con prosciutto, piselli, mais, uova.',
                'price' => 4.00,
                'visibility' => 1,
                'cover' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/1dd71a6b-bd81-4a7a-8013-114c731d1165/Derivates/21db79a0-9d69-44d2-8852-6945bc8fc0de.jpg',
                'user_id' => 2                
            ],
            [
                'name' => 'Pizza Margherita',
                'description' => 'La pizza più famosa e più buona del mondo. Ingredienti: pomodoro, mozzarella e basilico.',
                'price' => 6.50,
                'visibility' => 1,
                'cover' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Pizza-napoletana.jpg/1200px-Pizza-napoletana.jpg',
                'user_id' => 1
            ],
            [
                'name' => 'Margherita',
                'description' => 'Classica pizza. Ingredienti: pomodoro, mozzarella e basilico.',
                'price' => 6.00,
                'visibility' => 1,
                'cover' => 'https://www.ricettapizzanapoletana.it/wp-content/uploads/2019/07/pizza-napoletana.jpg',
                'user_id' => 10
            ],
            [
                'name' => 'Bufala',
                'description' => 'Ingredienti: Pomodoro, mozzarella di bufala, basilico, olio evo.',
                'price' => 8.50,
                'visibility' => 1,
                'cover' => 'https://www.alice.tv/img/cache/610x380/media/ricette/tjnh0rl/img_2846410445500804.jpg',
                'user_id' => 11
            ],
            [
                'name' => 'Calzone',
                'description' => 'Ingredienti: Pomodoro, mozzarella fior di latte, prosciutto, basilico, olio evo.',
                'price' => 6.50,
                'visibility' => 1,
                'cover' => 'https://www.alice.tv/img/cache/610x380/media/ricette/i96fvvb/calzone-classico.jpg',
                'user_id' => 1
            ],
            [
                'name' => 'Capriciosa',
                'description' => 'Ingredienti: Pomodoro, mozzarella fior di latte, prosciutto, funghi champignon, carciofi, olive, basilico, olio evo.',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'https://i2.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2017/12/3240_Pizza.jpg?resize=895%2C616&ssl=1',
                'user_id' => 10
            ],
            [
                'name' => 'Frutti di mare',
                'description' => 'Ingredienti: Pomodoro, mozzarella fior di latte, cozze, seppie*, polipo*, basilico, olio evo.',
                'price' => 10.00,
                'visibility' => 1,
                'cover' => 'https://i1.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2017/08/3238_Pizza-1.jpg?resize=895%2C616&ssl=1',
                'user_id' => 11
            ],
            [
                'name' => 'Marinara',
                'description' => 'Ingredienti: Pomodoro, aglio, origano, basilico, olio evo.',
                'price' => 4.00,
                'visibility' => 1,
                'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/05/pizza-marinara-5.jpg',
                'user_id' => 10
            ],
            [
                'name' => 'Quattro stagioni',
                'description' => 'Ingredienti: Pomodoro, mozzarella fior di latte, prosciutto cotto, funghi champignon, carciofi*, basilico, olio evo.',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'https://i1.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2016/07/3017_Pizza.jpg?resize=895%2C616&ssl=1',
                'user_id' => 1
            ],


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
