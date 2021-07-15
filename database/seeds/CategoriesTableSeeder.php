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
                'cover' => 'img/categories/italiano.jpg'
            ],
            [
                'category' => 'Cinese',
                'cover' => 'img/categories/cinese.jpg'
            ],
            [
                'category' => 'Giapponese',
                'cover' => 'img/categories/giapponese.jpg'
            ],
            [
                'category' => 'Americano',
                'cover' => 'img/categories/americano.jpg'
            ],
            [
                'category' => 'Messicano',
                'cover' => 'img/categories/messicano.jpg'
            ],
            [
                'category' => 'Indiano',
                'cover' => 'img/categories/indiano.jpg'
            ],
            [
                'category' => 'Internazionale',
                'cover' => 'img/categories/internazionale.jpg'
            ],
            [
                'category' => 'Pesce',
                'cover' => 'img/categories/pesce.jpg'
            ],
            [
                'category' => 'Carne',
                'cover' => 'img/categories/carne.jpg'
            ],
            [
                'category' => 'Pizza',
                'cover' => 'img/categories/pizza.jpg'
            ],
            [
                'category' => 'Halal',
                'cover' => 'img/categories/halal.jpg'
            ],
            [
                'category' => 'Fast Food',
                'cover' => 'img/categories/fast-food.jpg'
            ],
            [
                'category' => 'Pasticceria',
                'cover' => 'img/categories/pasticceria.jpg'
            ],
            [
                'category' => 'Gelateria',
                'cover' => 'img/categories/gelateria.jpg'
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
