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
                'cover' => 'img/products/riso-alla-cantonese.jpg',
                'user_id' => 2                
            ],
            [
                'name' => 'Margherita',
                'description' => 'La pizza più famosa e più buona del mondo. Ingredienti: pomodoro, mozzarella e basilico.',
                'price' => 6.50,
                'visibility' => 1,
                'cover' => 'img/products/margherita.jpg',
                'user_id' => 1
            ],
            [
                'name' => 'Margherita',
                'description' => 'Classica pizza. Ingredienti: pomodoro, mozzarella e basilico.',
                'price' => 6.00,
                'visibility' => 1,
                'cover' => 'img/products/pizza-napoletana.jpg',
                'user_id' => 10
            ],
            [
                'name' => 'Bufala',
                'description' => 'Ingredienti: Pomodoro, mozzarella di bufala, basilico, olio evo.',
                'price' => 8.50,
                'visibility' => 1,
                'cover' => 'img/products/bufala.jpg',
                'user_id' => 33
            ],
            [
                'name' => 'Calzone',
                'description' => 'Ingredienti: Pomodoro, mozzarella fior di latte, prosciutto, basilico, olio evo.',
                'price' => 6.50,
                'visibility' => 1,
                'cover' => 'img/products/calzone.jpg',
                'user_id' => 1
            ],
            [
                'name' => 'Capriciosa',
                'description' => 'Ingredienti: Pomodoro, mozzarella fior di latte, prosciutto, funghi champignon, carciofi, olive, basilico, olio evo.',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'img/products/capriciosa.jpg',
                'user_id' => 10
            ],
            [
                'name' => 'Frutti di mare',
                'description' => 'Ingredienti: Pomodoro, mozzarella fior di latte, cozze, seppie*, polipo*, basilico, olio evo.',
                'price' => 10.00,
                'visibility' => 1,
                'cover' => 'img/products/frutti-di-mare.jpg',
                'user_id' => 33
            ],
            [
                'name' => 'Marinara',
                'description' => 'Ingredienti: Pomodoro, aglio, origano, basilico, olio evo.',
                'price' => 4.00,
                'visibility' => 1,
                'cover' => 'img/products/marinara.jpg',
                'user_id' => 10
            ],
            [
                'name' => 'Quattro stagioni',
                'description' => 'Ingredienti: Pomodoro, mozzarella fior di latte, prosciutto cotto, funghi champignon, carciofi*, basilico, olio evo.',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'img/products/quattro-stagioni.jpg',
                'user_id' => 1
            ],
            [
                'name' => 'Wurstel',
                'description' => 'Ingredienti: Pomodoro, mozzarella, wurstel e olio evo.',
                'price' => 6.00,
                'visibility' => 1,
                'cover' => 'img/products/wurstel.jpg',
                'user_id' => 1
            ],
            [
                'name' => 'Diavola',
                'description' => 'Ingredienti: Pomodoro, mozzarella fior di latte, salame piccante, olio evo.',
                'price' => 6.00,
                'visibility' => 1,
                'cover' => 'img/products/diavola.jpg',
                'user_id' => 1
            ],
            [
                'name' => 'Involtini primavera',
                'description' => 'Ingredienti: Carote, cipolla, cavolo cappuccio, farina.',
                'price' => 2.00,
                'visibility' => 1,
                'cover' => 'img/products/involtini-primavera.jpg',
                'user_id' => 2
            ],
            [
                'name' => 'Ravioli di verdure',
                'description' => 'Ingredienti: Farina, spinaci, carote, cipolla.',
                'price' => 3.30,
                'visibility' => 1,
                'cover' => 'img/products/ravioli-di-verdure.jpg',
                'user_id' => 2
            ],
            [
                'name' => 'Riso al curry',
                'description' => 'Ingredienti: Riso, curry, piselli e uova.',
                'price' => 3.30,
                'visibility' => 1,
                'cover' => 'img/products/riso-al-curry.jpg',
                'user_id' => 2
            ],
            [
                'name' => 'Zuppa orientale',
                'description' => 'Ingredienti: Piselli, funghi, mazzancolla, salsa di soia, prosciutto.',
                'price' => 3.00,
                'visibility' => 1,
                'cover' => 'img/products/zuppa-orientale.jpg',
                'user_id' => 2
            ],
            [
                'name' => 'Cous Cous di verdure',
                'description' => 'Ingredienti: Cous cous, verdure di stagione.',
                'price' => 6.60,
                'visibility' => 1,
                'cover' => 'img/products/cous-cous-di-verdure.jpg',
                'user_id' => 3
            ],
            [
                'name' => 'Spaghetti di mare',
                'description' => 'Ingredienti: Spaghetti, pesce del giorno.',
                'price' => 8.00,
                'visibility' => 1,
                'cover' => 'img/products/spaghetti-di-mare.jpg',
                'user_id' => 3
            ],
            [
                'name' => 'Penne all\'arrabbiata',
                'description' => 'Ingredienti: Penne, pomodori pelati, peperoncino secco, prezzemolo.',
                'price' => 6.50,
                'visibility' => 1,
                'cover' => 'img/products/penne-alla-arrabbiata.jpg',
                'user_id' => 3
            ],
            [
                'name' => 'Tagliatelle al tartufo nero',
                'description' => 'Ingredienti: Tagliatelle, tartufo nero, burro, prezzemolo.',
                'price' => 12.50,
                'visibility' => 1,
                'cover' => 'img/products/tagliatelle-al-tartufo-nero.jpg',
                'user_id' => 3
            ],
            [
                'name' => 'Coniglio in umido',
                'description' => 'Ingredienti: Coniglio, carote, basilico, vino bianco.',
                'price' => 10.50,
                'visibility' => 1,
                'cover' => 'img/products/coniglio-in-umido.jpg',
                'user_id' => 3
            ],
            [
                'name' => 'Gran Crispy McBacon',
                'description' => 'Ingredienti: Carne 100% bovina, bacon croccante, formaggio, salsa crispy.',
                'price' => 5.50,
                'visibility' => 1,
                'cover' => 'img/products/gran-crispy-mcbacon.jpg',
                'user_id' => 4
            ],
            [
                'name' => 'Crispy McWrap',
                'description' => 'Ingredienti: Carne 100% bovina, bacon croccante, formaggio, salsa crispy.',
                'price' => 4.50,
                'visibility' => 1,
                'cover' => 'img/products/crispy-mcwrap.jpg',
                'user_id' => 4
            ],
            [
                'name' => 'Crispy McWrap',
                'description' => '100% petto di pollo italiano avvolto in una nuova croccante panatura, Pecorino Toscano DOP, insalata, pomodoro, salsa ai tre pepi e pane con semi di sesamo.',
                'price' => 5.50,
                'visibility' => 1,
                'cover' => 'img/products/crispy-mcwrap-1.jpg',
                'user_id' => 4
            ],
            [
                'name' => 'Chicken McNuggets',
                'description' => 'Croccantissimi bocconcini di 100% petto di pollo proveniente da allevamenti italiani, allevato a terra, senza mangimi OGM.',
                'price' => 2.50,
                'visibility' => 1,
                'cover' => 'img/products/chicken-mc-nuggets.jpg',
                'user_id' => 4
            ],
            [
                'name' => 'Caesar Salad con pollo croccante',
                'description' => 'Hai mai provato la Caesar Salad con il petto pollo croccante 100% italiano? La sua gustosa panatura si sposa alla perfezione con il mix di insalata tenera, la dolcezza dei pomodorini ciliegia e il formaggio a scaglie. Un mix di ingredienti dal sapore unico.',
                'price' => 4.00,
                'visibility' => 1,
                'cover' => 'img/products/cesar-salad-con-pollo-croccante.jpg',
                'user_id' => 4
            ],
            [
                'name' => 'Nighiri sake',
                'description' => 'Ingredienti: Salmone, riso.',
                'price' => 2.80,
                'visibility' => 1,
                'cover' => 'img/products/nighiri-sake.jpg',
                'user_id' => 5
            ],
            [
                'name' => 'Gunkan maguro',
                'description' => 'Ingredienti: Tonno.',
                'price' => 3.50,
                'visibility' => 1,
                'cover' => 'img/products/gunkan-maguro.jpg',
                'user_id' => 5
            ],
            [
                'name' => 'Hosomaki ebiten',
                'description' => 'Ingredienti: Riso, alghe, gambero in tempura.',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'img/products/hosomaki-ebiten.jpg',
                'user_id' => 5
            ],
            [
                'name' => 'Sake tartare',
                'description' => 'Ingredienti: Salmone, avocado, sesamo.',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'img/products/sake-tartare.jpg',
                'user_id' => 5
            ],
            [
                'name' => 'Sushi misto',
                'description' => '',
                'price' => 8.90,
                'visibility' => 1,
                'cover' => 'img/products/sushi-misto.jpg',
                'user_id' => 5
            ],
            [
                'name' => 'Piada salsiccia e patate',
                'description' => 'Ingredienti: Farina, olio evo, acqua, sale, patate e salsiccia',
                'price' => 5.90,
                'visibility' => 1,
                'cover' => 'img/products/piada-salsiccia-e-patate.jpg',
                'user_id' => 6
            ],
            [
                'name' => 'Piada Lucia',
                'description' => 'Ingredienti: Farina, olio evo, acqua, sale, rucoal, scamorza, pomodorini, cotto',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'img/products/piada-lucia.jpg',
                'user_id' => 6
            ],
            [
                'name' => 'Piada Ernesto',
                'description' => 'Ingredienti: Farina, olio evo, acqua, sale, crudo, rucola, pomodoro, bufala',
                'price' => 6.50,
                'visibility' => 1,
                'cover' => 'img/products/piadina-ernesto.jpg',
                'user_id' => 6
            ],
            [
                'name' => 'Piada Vittoria',
                'description' => 'Ingredienti: Farina, olio evo, acqua, sale, avocado, salmone',
                'price' => 7.50,
                'visibility' => 1,
                'cover' => 'img/products/piada-vittoria.jpg',
                'user_id' => 6
            ],
            [
                'name' => 'Piada Franco',
                'description' => 'Ingredienti: Farina, olio evo, acqua, sale, funghi, speck, crescenza',
                'price' => 6.00,
                'visibility' => 1,
                'cover' => 'img/products/piada-franco.jpg',
                'user_id' => 6
            ],
            [
                'name' => 'Classico',
                'description' => 'Ingredienti: Pane, hamburger da 150g di manzo, cheddar, bacon, insalata, pomodoro, cipolla',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'img/products/classico.jpg',
                'user_id' => 7
            ],
            [
                'name' => '1987',
                'description' => 'Ingredienti: Hamburger da 150g di Angus, doppio bacon, scamorza, pomodoro',
                'price' => 8.00,
                'visibility' => 1,
                'cover' => 'img/products/1987.jpg',
                'user_id' => 7
            ],
            [
                'name' => 'Old style',
                'description' => 'Ingredienti: Hamburger da 150g di maiale, soffritto della casa, melanzana, maionese',
                'price' => 7.50,
                'visibility' => 1,
                'cover' => 'img/products/old-style.jpg',
                'user_id' => 7
            ],
            [
                'name' => 'Veggie',
                'description' => 'Ingredienti: Farina, olio evo, lenticchie, carote, cipolla, paprika dolca, dadolata di peperoni',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'img/products/veggie.jpg',
                'user_id' => 7
            ],
            [
                'name' => 'Bismark',
                'description' => 'Ingredienti: Hamburger da 200g mi bovino, bacon, uovo occhio di bue, battuta di aromi',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'img/products/bismark.jpg',
                'user_id' => 7
            ],
            [
                'name' => 'Pistacchio',
                'description' => 'Ingredienti: Latte, crema di pistacchio e pistacchio.',
                'price' => 2.00,
                'visibility' => 1,
                'cover' => 'img/products/pistacchio.jpg',
                'user_id' => 8
            ],
            [
                'name' => 'Fragola',
                'description' => 'Ingredienti: Latte, sciroppo di fragola fragole.',
                'price' => 2.50,
                'visibility' => 1,
                'cover' => 'img/products/fragola.jpg',
                'user_id' => 8
            ],
            [
                'name' => 'Yin yang',
                'description' => 'Ingredienti: Fior di latte e caffè',
                'price' => 3.00,
                'visibility' => 1,
                'cover' => 'img/products/yin-yang.jpg',
                'user_id' => 8
            ],
            [
                'name' => 'Cioccolato',
                'description' => 'Ingredienti: Latte, cacao',
                'price' => 2.00,
                'visibility' => 1,
                'cover' => 'img/products/cioccolato.jpg',
                'user_id' => 8
            ],
            [
                'name' => 'Tropical',
                'description' => 'Ingredienti: Latte, banane, ciliege',
                'price' => 3.50,
                'visibility' => 1,
                'cover' => 'img/products/tropical.jpg',
                'user_id' => 8
            ],
            [
                'name' => 'Pasticcini assortiti',
                'description' => 'Pasticcini vari, prezzo al kg.',
                'price' => 25.00,
                'visibility' => 1,
                'cover' => 'img/products/pasticcini-assortiti.jpg',
                'user_id' => 9
            ],
            [
                'name' => 'Sbrisolona',
                'description' => 'Prezzo al kg.',
                'price' => 30.00,
                'visibility' => 1,
                'cover' => 'img/products/sbrisolona.jpg',
                'user_id' => 9
            ],
            [
                'name' => 'Sacher',
                'description' => 'Prezzo al kg.',
                'price' => 33.50,
                'visibility' => 1,
                'cover' => 'img/products/sacher.jpg',
                'user_id' => 9
            ],
            [
                'name' => 'Millefoglie',
                'description' => 'Prezzo al kg.',
                'price' => 40.50,
                'visibility' => 1,
                'cover' => 'img/products/millefoglie.jpg',
                'user_id' => 9
            ],
            [
                'name' => 'Muffin alla nutella',
                'description' => 'Prezzo al kg.',
                'price' => 31.50,
                'visibility' => 1,
                'cover' => 'img/products/muffin-alla-nutella.jpg',
                'user_id' => 9
            ],
            [
                'name' => 'Ortolana',
                'description' => 'Ingredienti: Mozzarella, melanzae, cipolla, peperoni, funghi.',
                'price' => 7.50,
                'visibility' => 1,
                'cover' => 'img/products/ortolana.jpg',
                'user_id' => 10
            ],
            [
                'name' => 'Fiori di zucca e acciughe',
                'description' => 'Ingredienti: Mozzarella, fiori di zucca, acciughe basilico.',
                'price' => 31.50,
                'visibility' => 1,
                'cover' => 'img/products/fiori-di-zucca-e-acciughe.jpg',
                'user_id' => 10
            ],
            [
                'name' => 'Trancio di spada alla griglia',
                'description' => 'Ingredienti: Pesce spada.',
                'price' => 8.50,
                'visibility' => 1,
                'cover' => 'img/products/trancio-di-spada-alla-griglia.jpg',
                'user_id' => 11
            ],
            [
                'name' => 'Filetto di manzo alla griglia',
                'description' => 'Ingredienti: Manzo Italiano.',
                'price' => 14.50,
                'visibility' => 1,
                'cover' => 'img/products/filetto-di-manzo-alla-griglia.jpg',
                'user_id' => 11
            ],
            [
                'name' => 'Tagliere di formaggi',
                'description' => 'Ingredienti: formaggi del giorno.',
                'price' =>7.50,
                'visibility' => 1,
                'cover' => 'img/products/tagliere-di-formaggi.jpg',
                'user_id' => 11
            ],
            [
                'name' => 'Cotoletta alla milanese',
                'description' => 'Ingredienti: Vitello italiano.',
                'price' => 10.00,
                'visibility' => 1,
                'cover' => 'img/products/cotoletta-alla-milanese.jpg',
                'user_id' => 11
            ],
            [
                'name' => 'Petto di pollo alla griglia',
                'description' => 'Ingredienti: Pollo italiano alla griglia.',
                'price' => 6.50,
                'visibility' => 1,
                'cover' => 'img/products/petto-di-pollo-alla-griglia.jpg',
                'user_id' => 11
            ],
            [
                'name' => 'Maiale funghi e bambù',
                'description' => 'Ingredienti: Carne di maiale, funghi e bambù.',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'img/products/maiale-funghi-e-bambu.jpg',
                'user_id' => 12
            ],
            [
                'name' => 'Maiale agrodolce',
                'description' => 'Ingredienti: Maiale, peperoni, ananas.',
                'price' => 5.50,
                'visibility' => 1,
                'cover' => 'img/products/maiale-agrodolce.jpg',
                'user_id' => 12
            ],
            [
                'name' => 'Spaghetti di soia',
                'description' => 'Ingredienti: Spaghetti di riso, germogli di soia, zucchine, carote.',
                'price' => 3.80,
                'visibility' => 1,
                'cover' => 'img/products/spaghetti-di-soia.jpg',
                'user_id' => 12
            ],
            [
                'name' => 'Ravioli di gambero al vapore',
                'description' => 'Ingredienti: Farina di riso, gamberi.',
                'price' => 2.50,
                'visibility' => 1,
                'cover' => 'img/products/ravioli-di-gambero-al-vapore.jpg',
                'user_id' => 12
            ],
            [
                'name' => 'Alghe fritte',
                'description' => 'Ingredienti: alghe fritte.',
                'price' => 3.00,
                'visibility' => 1,
                'cover' => 'img/products/alghe-fritte.jpg',
                'user_id' => 12
            ],
            [
                'name' => 'Mix pakora',
                'description' => 'Ingredienti: Verdure miste fritte in pastella e spezie.',
                'price' => 4.00,
                'visibility' => 1,
                'cover' => 'img/products/mix-pakora.jpg',
                'user_id' => 13
            ],
            [
                'name' => 'Samosa',
                'description' => 'Ingredienti: Paste triangolari fritte ripiene di verdure miste.',
                'price' => 4.50,
                'visibility' => 1,
                'cover' => 'img/products/samosa.jpg',
                'user_id' => 13
            ],
            [
                'name' => 'Basmati bianco',
                'description' => 'Ingredienti: Riso basmati al vapore.',
                'price' => 2.50,
                'visibility' => 1,
                'cover' => 'img/products/basmati-bianco.jpg',
                'user_id' => 13
            ],
            [
                'name' => 'Riso zafferano',
                'description' => 'Ingredienti: Riso basmati allo zafferano e mandorle.',
                'price' => 3.50,
                'visibility' => 1,
                'cover' => 'img/products/riso-zafferano.jpg',
                'user_id' => 13
            ],
            [
                'name' => 'Coconut barfi',
                'description' => 'Ingredienti: Cocco, aroma di rose.',
                'price' => 3.00,
                'visibility' => 1,
                'cover' => 'img/products/coconut-barfi.jpg',
                'user_id' => 13
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
