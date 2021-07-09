<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'email' => 'vecchioforno@gmail.com',
                'password' => Hash::make('ernesto_rossi'),
                'restaurant_name' => 'Pizzeria Vecchio Forno',
                'restaurant_address' => 'Via Roma 45',
                'vat_number' => '09134672879',
                'name' => 'Ernesto',
                'surname' => 'Rossi'           
            ]
        ];

        

        foreach($users as $user) {
            $new_user = new User;

            $new_user->email = $user['email'];
            $new_user->password = $user['password'];
            $new_user->restaurant_name = $user['restaurant_name'];
            $new_user->restaurant_address = $user['restaurant_address'];
            $new_user->vat_number = $user['vat_number'];
            $new_user->name = $user['name'];
            $new_user->surname = $user['surname'];

            $new_user->save();
        }

            
    }
}
