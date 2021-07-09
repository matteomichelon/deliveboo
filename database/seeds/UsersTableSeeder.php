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
            ],
            [
                'email' => 'ildragodoriente@gmail.com',
                'password' => Hash::make('jackie_chan'),
                'restaurant_name' => 'Il Drago D\'Oriente',
                'restaurant_address' => 'Via Mazzini 20',
                'vat_number' => '09134672345',
                'name' => 'Jackie',
                'surname' => 'Chan'
            ],
            [
                'email' => 'nonnapina@gmail.com',
                'password' => Hash::make('nonna_pina'),
                'restaurant_name' => 'Ristorante da Nonna Pina',
                'restaurant_address' => 'Via Cavour 100',
                'vat_number' => '09124672879',
                'name' => 'Giuseppina',
                'surname' => 'Verdi'
            ],
            [
                'email' => 'mcdonads@gmail.com',
                'password' => Hash::make('donald_trump'),
                'restaurant_name' => 'McDonald\'s',
                'restaurant_address' => 'Corso San Felice 100',
                'vat_number' => '09168472879',
                'name' => 'Donald',
                'surname' => 'Trump'
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
