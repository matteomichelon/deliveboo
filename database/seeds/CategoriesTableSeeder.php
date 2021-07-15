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
                'cover' => ''
            ],
            [
                'category' => 'Cinese',
                'cover' => ''
            ],
            [
                'category' => 'Giapponese',
                'cover' => ''
            ],
            [
                'category' => 'Americano',
                'cover' => ''
            ],
            [
                'category' => 'Messicano',
                'cover' => ''
            ],
            [
                'category' => 'Indiano',
                'cover' => ''
            ],
            [
                'category' => 'Internazionale',
                'cover' => ''
            ],
            [
                'category' => 'Pesce',
                'cover' => ''
            ],
            [
                'category' => 'Carne',
                'cover' => ''
            ],
            [
                'category' => 'Pizza',
                'cover' => ''
            ],
            [
                'category' => 'Halal',
                'cover' => ''
            ],
            [
                'category' => 'Fast Food',
                'cover' => ''
            ],
            [
                'category' => 'Pasticceria',
                'cover' => ''
            ],
            [
                'category' => 'Gelateria',
                'cover' => ''
            ]
        ];


        foreach($categories as $category) {
            $new_category = new Category;
            $new_category->category = $category['category'];
            $new_category->save();
        }


    }
}
