<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'category' => 'Italiano',
                'cover' => 'img/categories/italiano.png'
            ],
            [
                'category' => 'Cinese',
                'cover' => 'img/categories/cinese.png'
            ],
            [
                'category' => 'Giapponese',
                'cover' => 'img/categories/giapponese.png'
            ],
            [
                'category' => 'Americano',
                'cover' => 'img/categories/americano.png'
            ],
            [
                'category' => 'Messicano',
                'cover' => 'img/categories/messicano.png'
            ],
            [
                'category' => 'Indiano',
                'cover' => 'img/categories/indiano.png'
            ],
            [
                'category' => 'Internazionale',
                'cover' => 'img/categories/internazionale.png'
            ],
            [
                'category' => 'Pesce',
                'cover' => 'img/categories/pesce.png'
            ],
            [
                'category' => 'Carne',
                'cover' => 'img/categories/carne.png'
            ],
            [
                'category' => 'Pizza',
                'cover' => 'img/categories/pizza.png'
            ],
            [
                'category' => 'Halal',
                'cover' => 'img/categories/halal.png'
            ],
            [
                'category' => 'Fast Food',
                'cover' => 'img/categories/fast-food.png'
            ],
            [
                'category' => 'Pasticceria',
                'cover' => 'img/categories/pasticceria.png'
            ],
            [
                'category' => 'Gelateria',
                'cover' => 'img/categories/gelateria.png'
            ]
        ];


        foreach($categories as $category) {
            $new_category = new Category;
            $new_category->category = $category['category'];
            $new_category->cover = $category['cover'];
            $new_category->save();
        }


    }
}
