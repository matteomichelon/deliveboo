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
            ],
            [
                'email' => 'kampai@gmail.com',
                'password' => Hash::make('kenji_nakano'),
                'restaurant_name' => 'Sushi Kampai',
                'restaurant_address' => 'Via libertà 10',
                'vat_number' => '28934628362',
                'name' => 'Kenji',
                'surname' => 'Nakano'
            ],
            [
                'email' => 'piadanamania@gmail.com',
                'password' => Hash::make('leonardo_bacchio'),
                'restaurant_name' => 'Piadina Mania',
                'restaurant_address' => 'Via San Felice 105',
                'vat_number' => '49124672879',
                'name' => 'Leonardo',
                'surname' => 'Bacchio'
            ],
            [
                'email' => 'newwildwest@gmail.com',
                'password' => Hash::make('luca_gerini'),
                'restaurant_name' => 'New Wild West',
                'restaurant_address' => 'Via dalla chiesa 11',
                'vat_number' => '29124672879',
                'name' => 'Luca',
                'surname' => 'Gerini'
            ],
            [
                'email' => 'angelodelgelato@gmail.com',
                'password' => Hash::make('angelo_castoldi'),
                'restaurant_name' => 'Angelo del gelato',
                'restaurant_address' => 'Via Cristoforo 23',
                'vat_number' => '23124672879',
                'name' => 'Angelo',
                'surname' => 'Castoldi'
            ],
            [
                'email' => 'pasticceriadeimille@gmail.com',
                'password' => Hash::make('simona_saviori'),
                'restaurant_name' => 'Pasticceria dei mille',
                'restaurant_address' => 'Via dei mille 7',
                'vat_number' => '33124672879',
                'name' => 'Simona',
                'surname' => 'Saviori'
            ],
            [
                'email' => 'ziopino@gmail.com',
                'password' => Hash::make('pinuccio_esposito'),
                'restaurant_name' => 'Pizzeria zio Pino',
                'restaurant_address' => 'Piazza castello 10',
                'vat_number' => '09421672879',
                'name' => 'Pinuccio',
                'surname' => 'Esposito'
            ],
            [
                'email' => 'bellaitalia@gmail.com',
                'password' => Hash::make('caterina_farina'),
                'restaurant_name' => 'Ristorante Bella italia',
                'restaurant_address' => 'Via pertini 4',
                'vat_number' => '99124672871',
                'name' => 'Caterina',
                'surname' => 'Farina'
            ],
            [
                'email' => 'royalgarden@gmail.com',
                'password' => Hash::make('xhiang_liu'),
                'restaurant_name' => 'Ristorante Royal Garden',
                'restaurant_address' => 'Via tasso 34',
                'vat_number' => '09664672879',
                'name' => 'Xhiang',
                'surname' => 'Liu'
            ],
            [
                'email' => 'da-apu@gmail.com',
                'password' => Hash::make('apu_kumar'),
                'restaurant_name' => 'Ristorante da Apu',
                'restaurant_address' => 'Via Losi 20',
                'vat_number' => '09724672879',
                'name' => 'Apu',
                'surname' => 'Kumar'
            ],
            [
                'email' => 'tresapori@gmail.com',
                'password' => Hash::make('luigi_guzzi'),
                'restaurant_name' => 'Ristorante Tre Sapori',
                'restaurant_address' => 'Via Garibaldi 31-a',
                'vat_number' => '89124673879',
                'name' => 'Luigi',
                'surname' => 'Guzzi'
            ],
            [
                'email' => 'tostissimo@gmail.com',
                'password' => Hash::make('giulia_foggia'),
                'restaurant_name' => 'Tostissimo',
                'restaurant_address' => 'Piazza del Duomo 4',
                'vat_number' => '46124672479',
                'name' => 'Giulia',
                'surname' => 'Foggia'
            ],
            [
                'email' => 'asianfood@gmail.com',
                'password' => Hash::make('jin_ming'),
                'restaurant_name' => 'Ristorante Asian Food',
                'restaurant_address' => 'Piazza Italia 15',
                'vat_number' => '39124672839',
                'name' => 'Jin',
                'surname' => 'Ming'
            ],
            [
                'email' => 'zamzam@gmail.com',
                'password' => Hash::make('raje_chander'),
                'restaurant_name' => 'ZamZam Indiano',
                'restaurant_address' => 'Piazza Emanuele Filiberto 21',
                'vat_number' => '17124672279',
                'name' => 'Raje',
                'surname' => 'Chander'
            ],
            [
                'email' => 'diablopub@gmail.com',
                'password' => Hash::make('lucia_rossi'),
                'restaurant_name' => 'Diablo Pub',
                'restaurant_address' => 'Via Cavour 10',
                'vat_number' => '19326672879',
                'name' => 'Lucia',
                'surname' => 'Rossi'
            ],
            [
                'email' => 'elburrito@gmail.com',
                'password' => Hash::make('carlos_treves'),
                'restaurant_name' => 'El Burrito',
                'restaurant_address' => 'Via Savona 17',
                'vat_number' => '77124672879',
                'name' => 'Carlos',
                'surname' => 'Treves'
            ],
            [
                'email' => 'mexicancuisine@gmail.com',
                'password' => Hash::make('pablo_raves'),
                'restaurant_name' => 'Mexican Cuisine',
                'restaurant_address' => 'Viale Lodi 23',
                'vat_number' => '09830153376',
                'name' => 'Pablo',
                'surname' => 'Raves'
            ],
            [
                'email' => 'polpoepatate@gmail.com',
                'password' => Hash::make('valentina_fais'),
                'restaurant_name' => 'Ristorante Polpo e Patate',
                'restaurant_address' => 'Viale Libertà 10',
                'vat_number' => '79324622819',
                'name' => 'Valentina',
                'surname' => 'Fais'
            ],
            [
                'email' => 'pesceazzurro@gmail.com',
                'password' => Hash::make('rocco_pescatore'),
                'restaurant_name' => 'Ristorante Pesce Azzurro',
                'restaurant_address' => 'Viale Gorizia 22',
                'vat_number' => '09444672879',
                'name' => 'Rocco',
                'surname' => 'Pescatore'
            ],
            [
                'email' => 'ilvecchioporto@gmail.com',
                'password' => Hash::make('cristian_pozzi'),
                'restaurant_name' => 'Ristorante Il Vecchio porto',
                'restaurant_address' => 'Viale della torre 4-c',
                'vat_number' => '09998672129',
                'name' => 'Cristian',
                'surname' => 'Pozzi'
            ],
            [
                'email' => 'sakura@gmail.com',
                'password' => Hash::make('lee_long'),
                'restaurant_name' => 'Ristorante Cinese Sakura',
                'restaurant_address' => 'Piazza Indipendenza 23',
                'vat_number' => '45001298733',
                'name' => 'Lee',
                'surname' => 'Long'
            ],
            [
                'email' => 'haokelai@gmail.com',
                'password' => Hash::make('jian_meng'),
                'restaurant_name' => 'Ristorante Cinese HaoKeLai',
                'restaurant_address' => 'Piazza del portico 13-b',
                'vat_number' => '34994561039',
                'name' => 'Jian',
                'surname' => 'Meng'
            ],
            [
                'email' => 'haikky@gmail.com',
                'password' => Hash::make('saito_moroboshi'),
                'restaurant_name' => 'Ristorante Giapponese Haikky',
                'restaurant_address' => 'Via Vigentina 55',
                'vat_number' => '08124673312',
                'name' => 'Saito',
                'surname' => 'Moroboshi'
            ],
            [
                'email' => 'fiordiloto@gmail.com',
                'password' => Hash::make('akihito_kurobashi'),
                'restaurant_name' => 'Fiori di Loto',
                'restaurant_address' => 'Piazza di Spagna 5',
                'vat_number' => '33594093221',
                'name' => 'Akihito',
                'surname' => 'Kurobashi'
            ],
            [
                'email' => 'shiritori@gmail.com',
                'password' => Hash::make('ataru_suzuki'),
                'restaurant_name' => 'Ristorante Giapponese Shiritori',
                'restaurant_address' => 'Via Leopardi 43-a',
                'vat_number' => '44014672279',
                'name' => 'Ataru',
                'surname' => 'Suzuki'
            ],
            [
                'email' => 'fiveburgers@gmail.com',
                'password' => Hash::make('silvio_pinna'),
                'restaurant_name' => 'Five Burger',
                'restaurant_address' => 'Via Colombo 112',
                'vat_number' => '39927372879',
                'name' => 'Silvio',
                'surname' => 'Pinna'
            ],
            [
                'email' => 'giroburger@gmail.com',
                'password' => Hash::make('dario_tonti'),
                'restaurant_name' => 'Giro Burger',
                'restaurant_address' => 'Via Vivente 6',
                'vat_number' => '39927322456',
                'name' => 'Dario',
                'surname' => 'Tonti'
            ],
            [
                'email' => 'burgerqueen@gmail.com',
                'password' => Hash::make('carter_fox'),
                'restaurant_name' => 'Burger Queen',
                'restaurant_address' => 'Via Palestrini 60',
                'vat_number' => '44097352811',
                'name' => 'Carter',
                'surname' => 'Fox'
            ],
            [
                'email' => 'pinospasta@gmail.com',
                'password' => Hash::make('pino_cammino'),
                'restaurant_name' => 'Pino\'s Pasta',
                'restaurant_address' => 'Via Colombarone 9',
                'vat_number' => '33467372179',
                'name' => 'Pino',
                'surname' => 'Cammino'
            ],
            [
                'email' => 'pizzerialagrotta@gmail.com',
                'password' => Hash::make('rosa_spina'),
                'restaurant_name' => 'Ristornate Pizzeria La Grotta',
                'restaurant_address' => 'Via Camillo Golgi 61',
                'vat_number' => '39221725560',
                'name' => 'Rosa',
                'surname' => 'Spina'
            ],
            [
                'email' => 'rajputristoranteindiano@gmail.com',
                'password' => Hash::make('rahmed_gohel'),
                'restaurant_name' => 'Rajput Ristornate Indiano',
                'restaurant_address' => 'Pizza Municipio 99',
                'vat_number' => '56428945546',
                'name' => 'Rahmed',
                'surname' => 'Gohel'
            ],
            [
                'email' => 'dawatindiano@gmail.com',
                'password' => Hash::make('fahir_kapoor'),
                'restaurant_name' => 'Dawat Indiano',
                'restaurant_address' => 'Via Spada 33',
                'vat_number' => '84895895655',
                'name' => 'Fahir',
                'surname' => 'Kapoor'
            ],
            [
                'email' => 'elpepo@gmail.com',
                'password' => Hash::make('paulh_mustas'),
                'restaurant_name' => 'El Pepo Mexico',
                'restaurant_address' => 'Piazza di Spagna 46',
                'vat_number' => '81273728791',
                'name' => 'Paulh',
                'surname' => 'Mustas'
            ],
            [
                'email' => 'salmãomessicano@gmail.com',
                'password' => Hash::make('luca_porto'),
                'restaurant_name' => 'Salmão Messicano',
                'restaurant_address' => 'Via dei Mille 15',
                'vat_number' => '32457372879',
                'name' => 'Luca',
                'surname' => 'Porto'
            ],
            [
                'email' => 'pasticceriadolcevita@gmail.com',
                'password' => Hash::make('monica_foglia'),
                'restaurant_name' => 'Pasticceria Dolce Vita',
                'restaurant_address' => 'Via dei Mille 24',
                'vat_number' => '44457388879',
                'name' => 'Monica',
                'surname' => 'Foglia'
            ],
            [
                'email' => 'pasticceritaalberti@gmail.com',
                'password' => Hash::make('claudio_alberti'),
                'restaurant_name' => 'Pasticceria Alberti',
                'restaurant_address' => 'Via del dosso 34',
                'vat_number' => '31287372329',
                'name' => 'Claudio',
                'surname' => 'Alberti'
            ],
            [
                'email' => 'ilconogoloso@gmail.com',
                'password' => Hash::make('giulia_scolaro'),
                'restaurant_name' => 'Il Cono Goloso',
                'restaurant_address' => 'Viale Campari 11',
                'vat_number' => '12995372829',
                'name' => 'Giulia',
                'surname' => 'Scolaro'
            ],
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
