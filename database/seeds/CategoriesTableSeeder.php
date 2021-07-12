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
                'category' => 'Italiano'
            ],
            [
                'category' => 'Cinese'
            ],
            [
                'category' => 'Giapponese'
            ],
            [
                'category' => 'Americano'
            ],
            [
                'category' => 'Messicano'
            ],
            [
                'category' => 'Indiano'
            ],
            [
                'category' => 'Internazionale'
            ],
            [
                'category' => 'Pesce'
            ],
            [
                'category' => 'Carne'
            ],
            [
                'category' => 'Pizza'
            ],
            [
                'category' => 'Halal'
            ],
            [
                'category' => 'Fast Food'
            ],
            [
                'category' => 'Pasticceria'
            ],
            [
                'category' => 'Gelateria'
            ]
        ];


        foreach($categories as $category) {
            $new_category = new Category;
            $new_category->category = $category['category'];
            $new_category->save();
        }


    }
}
