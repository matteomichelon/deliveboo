<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Traits\CalculateRestaurantSlug;

class UsersTableSeeder extends Seeder
{

    //Traits
    use CalculateRestaurantSlug;

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
                'surname' => 'Rossi',
                'categories' => [
                    1
                ]          
            ],
            [
                'email' => 'ildragodoriente@gmail.com',
                'password' => Hash::make('jackie_chan'),
                'restaurant_name' => 'Il Drago D\'Oriente',
                'restaurant_address' => 'Via Mazzini 20',
                'vat_number' => '09134672345',
                'name' => 'Jackie',
                'surname' => 'Chan',
                'categories' => [
                    2,
                    7
                ] 
            ],
            [
                'email' => 'nonnapina@gmail.com',
                'password' => Hash::make('nonna_pina'),
                'restaurant_name' => 'Ristorante da Nonna Pina',
                'restaurant_address' => 'Via Cavour 100',
                'vat_number' => '09124672879',
                'name' => 'Giuseppina',
                'surname' => 'Verdi',
                'categories' => [
                    1,
                    9
                ] 
            ],
            [
                'email' => 'mcdonads@gmail.com',
                'password' => Hash::make('donald_trump'),
                'restaurant_name' => 'McDonald\'s',
                'restaurant_address' => 'Corso San Felice 100',
                'vat_number' => '09168472879',
                'name' => 'Donald',
                'surname' => 'Trump',
                'categories' => [
                    12,
                    4,
                ] 
            ],
            [
                'email' => 'kampai@gmail.com',
                'password' => Hash::make('kenji_nakano'),
                'restaurant_name' => 'Sushi Kampai',
                'restaurant_address' => 'Via libertà 10',
                'vat_number' => '28934628362',
                'name' => 'Kenji',
                'surname' => 'Nakano',
                'categories' => [
                    3,
                    8,
                    7
                ] 
            ],
            [
                'email' => 'piadanamania@gmail.com',
                'password' => Hash::make('leonardo_bacchio'),
                'restaurant_name' => 'Piadina Mania',
                'restaurant_address' => 'Via San Felice 105',
                'vat_number' => '49124672879',
                'name' => 'Leonardo',
                'surname' => 'Bacchio',
                'categories' => [
                    1,
                    12
                ] 
            ],
            [
                'email' => 'newwildwest@gmail.com',
                'password' => Hash::make('luca_gerini'),
                'restaurant_name' => 'New Wild West',
                'restaurant_address' => 'Via dalla chiesa 11',
                'vat_number' => '29124672879',
                'name' => 'Luca',
                'surname' => 'Gerini',
                'categories' => [
                    9,
                    4,
                    7
                ] 
            ],
            [
                'email' => 'angelodelgelato@gmail.com',
                'password' => Hash::make('angelo_castoldi'),
                'restaurant_name' => 'Angelo del gelato',
                'restaurant_address' => 'Via Cristoforo 23',
                'vat_number' => '23124672879',
                'name' => 'Angelo',
                'surname' => 'Castoldi',
                'categories' => [
                    14
                ] 
            ],
            [
                'email' => 'pasticceriadeimille@gmail.com',
                'password' => Hash::make('simona_saviori'),
                'restaurant_name' => 'Pasticceria dei mille',
                'restaurant_address' => 'Via dei mille 7',
                'vat_number' => '33124672879',
                'name' => 'Simona',
                'surname' => 'Saviori',
                'categories' => [
                    13
                ] 
            ],
            [
                'email' => 'ziopino@gmail.com',
                'password' => Hash::make('pinuccio_esposito'),
                'restaurant_name' => 'Pizzeria zio Pino',
                'restaurant_address' => 'Piazza castello 10',
                'vat_number' => '09421672879',
                'name' => 'Pinuccio',
                'surname' => 'Esposito',
                'categories' => [
                    1,
                    10
                ] 
            ],
            [
                'email' => 'bellaitalia@gmail.com',
                'password' => Hash::make('caterina_farina'),
                'restaurant_name' => 'Ristorante Bella italia',
                'restaurant_address' => 'Via pertini 4',
                'vat_number' => '99124672871',
                'name' => 'Caterina',
                'surname' => 'Farina',
                'categories' => [
                    1,
                    8,
                    9
                ] 
            ],
            [
                'email' => 'royalgarden@gmail.com',
                'password' => Hash::make('xhiang_liu'),
                'restaurant_name' => 'Ristorante Royal Garden',
                'restaurant_address' => 'Via tasso 34',
                'vat_number' => '09664672879',
                'name' => 'Xhiang',
                'surname' => 'Liu',
                'categories' => [
                    2,
                    3,
                    7
                ] 
            ],
            [
                'email' => 'da-apu@gmail.com',
                'password' => Hash::make('apu_kumar'),
                'restaurant_name' => 'Ristorante da Apu',
                'restaurant_address' => 'Via Losi 20',
                'vat_number' => '09724672879',
                'name' => 'Apu',
                'surname' => 'Kumar',
                'categories' => [
                    6,
                    7
                ] 
            ],
            [
                'email' => 'tresapori@gmail.com',
                'password' => Hash::make('luigi_guzzi'),
                'restaurant_name' => 'Ristorante Tre Sapori',
                'restaurant_address' => 'Via Garibaldi 31-a',
                'vat_number' => '89124673879',
                'name' => 'Luigi',
                'surname' => 'Guzzi',
                'categories' => [
                    1,
                    8,
                    9
                ] 
            ],
            [
                'email' => 'tostissimo@gmail.com',
                'password' => Hash::make('giulia_foggia'),
                'restaurant_name' => 'Tostissimo',
                'restaurant_address' => 'Piazza del Duomo 4',
                'vat_number' => '46124672479',
                'name' => 'Giulia',
                'surname' => 'Foggia',
                'categories' => [
                    1,
                    12
                ] 
            ],
            [
                'email' => 'asianfood@gmail.com',
                'password' => Hash::make('jin_ming'),
                'restaurant_name' => 'Ristorante Asian Food',
                'restaurant_address' => 'Piazza Italia 15',
                'vat_number' => '39124672839',
                'name' => 'Jin',
                'surname' => 'Ming',
                'categories' => [
                    2,
                    3,
                    7
                ] 
            ],
            [
                'email' => 'zamzam@gmail.com',
                'password' => Hash::make('raje_chander'),
                'restaurant_name' => 'ZamZam Indiano',
                'restaurant_address' => 'Piazza Emanuele Filiberto 21',
                'vat_number' => '17124672279',
                'name' => 'Raje',
                'surname' => 'Chander',
                'categories' => [
                    6,
                    7
                ] 
            ],
            [
                'email' => 'diablopub@gmail.com',
                'password' => Hash::make('lucia_rossi'),
                'restaurant_name' => 'Diablo Pub',
                'restaurant_address' => 'Via Cavour 10',
                'vat_number' => '19326672879',
                'name' => 'Lucia',
                'surname' => 'Rossi',
                'categories' => [
                    5,
                    7
                ] 
            ],
            [
                'email' => 'elburrito@gmail.com',
                'password' => Hash::make('carlos_treves'),
                'restaurant_name' => 'El Burrito',
                'restaurant_address' => 'Via Savona 17',
                'vat_number' => '77124672879',
                'name' => 'Carlos',
                'surname' => 'Treves',
                'categories' => [
                    5,
                    7
                ] 
            ],
            [
                'email' => 'mexicancuisine@gmail.com',
                'password' => Hash::make('pablo_raves'),
                'restaurant_name' => 'Mexican Cuisine',
                'restaurant_address' => 'Viale Lodi 23',
                'vat_number' => '09830153376',
                'name' => 'Pablo',
                'surname' => 'Raves',
                'categories' => [
                    5,
                    7
                ] 
            ],
            [
                'email' => 'polpoepatate@gmail.com',
                'password' => Hash::make('valentina_fais'),
                'restaurant_name' => 'Ristorante Polpo e Patate',
                'restaurant_address' => 'Viale Libertà 10',
                'vat_number' => '79324622819',
                'name' => 'Valentina',
                'surname' => 'Fais',
                'categories' => [
                    1,
                    8
                ] 
            ],
            [
                'email' => 'pesceazzurro@gmail.com',
                'password' => Hash::make('rocco_pescatore'),
                'restaurant_name' => 'Ristorante Pesce Azzurro',
                'restaurant_address' => 'Viale Gorizia 22',
                'vat_number' => '09444672879',
                'name' => 'Rocco',
                'surname' => 'Pescatore',
                'categories' => [
                    1,
                    8
                ] 
            ],
            [
                'email' => 'ilvecchioporto@gmail.com',
                'password' => Hash::make('cristian_pozzi'),
                'restaurant_name' => 'Ristorante Il Vecchio porto',
                'restaurant_address' => 'Viale della torre 4-c',
                'vat_number' => '09998672129',
                'name' => 'Cristian',
                'surname' => 'Pozzi',
                'categories' => [
                    1,
                    8
                ] 
            ],
            [
                'email' => 'sakura@gmail.com',
                'password' => Hash::make('lee_long'),
                'restaurant_name' => 'Ristorante Cinese Sakura',
                'restaurant_address' => 'Piazza Indipendenza 23',
                'vat_number' => '45001298733',
                'name' => 'Lee',
                'surname' => 'Long',
                'categories' => [
                    2,
                    7
                ] 
            ],
            [
                'email' => 'haokelai@gmail.com',
                'password' => Hash::make('jian_meng'),
                'restaurant_name' => 'Ristorante Cinese HaoKeLai',
                'restaurant_address' => 'Piazza del portico 13-b',
                'vat_number' => '34994561039',
                'name' => 'Jian',
                'surname' => 'Meng',
                'categories' => [
                    2,
                    7
                ] 
            ],
            [
                'email' => 'haikky@gmail.com',
                'password' => Hash::make('saito_moroboshi'),
                'restaurant_name' => 'Ristorante Giapponese Haikky',
                'restaurant_address' => 'Via Vigentina 55',
                'vat_number' => '08124673312',
                'name' => 'Saito',
                'surname' => 'Moroboshi',
                'categories' => [
                    3,
                    7
                ] 
            ],
            [
                'email' => 'fiordiloto@gmail.com',
                'password' => Hash::make('akihito_kurobashi'),
                'restaurant_name' => 'Fiori di Loto',
                'restaurant_address' => 'Piazza di Spagna 5',
                'vat_number' => '33594093221',
                'name' => 'Akihito',
                'surname' => 'Kurobashi',
                'categories' => [
                    2,
                    3,
                    7
                ] 
            ],
            [
                'email' => 'shiritori@gmail.com',
                'password' => Hash::make('ataru_suzuki'),
                'restaurant_name' => 'Ristorante Giapponese Shiritori',
                'restaurant_address' => 'Via Leopardi 43-a',
                'vat_number' => '44014672279',
                'name' => 'Ataru',
                'surname' => 'Suzuki',
                'categories' => [
                    3,
                    7
                ] 
            ],
            [
                'email' => 'fiveburgers@gmail.com',
                'password' => Hash::make('silvio_pinna'),
                'restaurant_name' => 'Five Burger',
                'restaurant_address' => 'Via Colombo 112',
                'vat_number' => '39927372879',
                'name' => 'Silvio',
                'surname' => 'Pinna',
                'categories' => [
                    4,
                    12
                ] 
            ],
            [
                'email' => 'giroburger@gmail.com',
                'password' => Hash::make('dario_tonti'),
                'restaurant_name' => 'Giro Burger',
                'restaurant_address' => 'Via Vivente 6',
                'vat_number' => '39927322456',
                'name' => 'Dario',
                'surname' => 'Tonti',
                'categories' => [
                    4,
                    12
                ] 
            ],
            [
                'email' => 'burgerqueen@gmail.com',
                'password' => Hash::make('carter_fox'),
                'restaurant_name' => 'Burger Queen',
                'restaurant_address' => 'Via Palestrini 60',
                'vat_number' => '44097352811',
                'name' => 'Carter',
                'surname' => 'Fox',
                'categories' => [
                    4,
                    12
                ] 
            ],
            [
                'email' => 'pinospasta@gmail.com',
                'password' => Hash::make('pino_cammino'),
                'restaurant_name' => 'Pino\'s Pasta',
                'restaurant_address' => 'Via Colombarone 9',
                'vat_number' => '33467372179',
                'name' => 'Pino',
                'surname' => 'Cammino',
                'categories' => [
                    1
                ] 
            ],
            [
                'email' => 'pizzerialagrotta@gmail.com',
                'password' => Hash::make('rosa_spina'),
                'restaurant_name' => 'Ristornate Pizzeria La Grotta',
                'restaurant_address' => 'Via Camillo Golgi 61',
                'vat_number' => '39221725560',
                'name' => 'Rosa',
                'surname' => 'Spina',
                'categories' => [
                    1,
                    10
                ] 
            ],
            [
                'email' => 'rajputristoranteindiano@gmail.com',
                'password' => Hash::make('rahmed_gohel'),
                'restaurant_name' => 'Rajput Ristornate Indiano',
                'restaurant_address' => 'Pizza Municipio 99',
                'vat_number' => '56428945546',
                'name' => 'Rahmed',
                'surname' => 'Gohel',
                'categories' => [
                    6,
                    7
                ] 
            ],
            [
                'email' => 'dawatindiano@gmail.com',
                'password' => Hash::make('fahir_kapoor'),
                'restaurant_name' => 'Dawat Indiano',
                'restaurant_address' => 'Via Spada 33',
                'vat_number' => '84895895655',
                'name' => 'Fahir',
                'surname' => 'Kapoor',
                'categories' => [
                    6,
                    7
                ] 
            ],
            [
                'email' => 'elpepo@gmail.com',
                'password' => Hash::make('paulh_mustas'),
                'restaurant_name' => 'El Pepo Mexico',
                'restaurant_address' => 'Piazza di Spagna 46',
                'vat_number' => '81273728791',
                'name' => 'Paulh',
                'surname' => 'Mustas',
                'categories' => [
                    5,
                    7
                ]
            ],
            [
                'email' => 'salmãomessicano@gmail.com',
                'password' => Hash::make('luca_porto'),
                'restaurant_name' => 'Salmão Messicano',
                'restaurant_address' => 'Via dei Mille 15',
                'vat_number' => '32457372879',
                'name' => 'Luca',
                'surname' => 'Porto',
                'categories' => [
                    5,
                    7
                ]
            ],
            [
                'email' => 'pasticceriadolcevita@gmail.com',
                'password' => Hash::make('monica_foglia'),
                'restaurant_name' => 'Pasticceria Dolce Vita',
                'restaurant_address' => 'Via dei Mille 24',
                'vat_number' => '44457388879',
                'name' => 'Monica',
                'surname' => 'Foglia',
                'categories' => [
                13
                ]
            ],
            [
                'email' => 'pasticceria-alberti@gmail.com',
                'password' => Hash::make('claudio_alberti'),
                'restaurant_name' => 'Pasticceria Alberti',
                'restaurant_address' => 'Via del dosso 34',
                'vat_number' => '31287372329',
                'name' => 'Claudio',
                'surname' => 'Alberti',
                'categories' => [
                13
                ]
            ],
            [
                'email' => 'ilconogoloso@gmail.com',
                'password' => Hash::make('giulia_scolaro'),
                'restaurant_name' => 'Il Cono Goloso',
                'restaurant_address' => 'Viale Campari 11',
                'vat_number' => '12995372829',
                'name' => 'Giulia',
                'surname' => 'Scolaro',
                'categories' => [
                14
                ]
            ],
            [
                'email' => 'mesopotamia@gmail.com',
                'password' => Hash::make('ali_mehmet'),
                'restaurant_name' => 'Mesopotamia Kebap',
                'restaurant_address' => 'Piazza Travaglio 31',
                'vat_number' => '12505342829',
                'name' => 'Ali',
                'surname' => 'Mehmet',
                'categories' => [
                    11,
            7
                ]
            ],
            [
                'email' => 'yafa@gmail.com',
                'password' => Hash::make('hasan_zehra'),
                'restaurant_name' => 'Yafa Shawarma & Traditional Food',
                'restaurant_address' => 'Via  Carlo Mayr 13',
                'vat_number' => '098505342829',
                'name' => 'Hasan',
                'surname' => 'Zehra',
                'categories' => [
                    11,
                    7
                ]
            ]
        ];

        

        foreach($users as $user) {
            $new_user = new User;

            $new_user->email = $user['email'];
            $new_user->password = $user['password'];
            $new_user->restaurant_name = $user['restaurant_name'];
            $new_user->slug = $this->calculateRestaurantSlug($user['restaurant_name']);
            $new_user->restaurant_address = $user['restaurant_address'];
            $new_user->vat_number = $user['vat_number'];
            $new_user->name = $user['name'];
            $new_user->surname = $user['surname'];

            $new_user->save();            
            $new_user->categories()->sync($user['categories']);            
        }

            
    }
}
