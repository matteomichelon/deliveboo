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
                'cover' => 'https://www.alice.tv/img/cache/610x380/media/ricette/tjnh0rl/img_2846410445500804.jpg',
                'user_id' => 33
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
                'user_id' => 33
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
            [
                'name' => 'Wurstel',
                'description' => 'Ingredienti: Pomodoro, mozzarella, wurstel e olio evo.',
                'price' => 6.00,
                'visibility' => 1,
                'cover' => 'https://ivoatrastevere.it/wp-content/uploads/2021/03/PIZZA-ROSSA-CON-WURSTEL.jpg',
                'user_id' => 1
            ],
            [
                'name' => 'Diavola',
                'description' => 'Ingredienti: Pomodoro, mozzarella fior di latte, salame piccante, olio evo.',
                'price' => 6.00,
                'visibility' => 1,
                'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/05/69630013_m.jpg',
                'user_id' => 1
            ],
            [
                'name' => 'Involtini primavera',
                'description' => 'Ingredienti: Carote, cipolla, cavolo cappuccio, farina.',
                'price' => 2.00,
                'visibility' => 1,
                'cover' => 'https://blog.giallozafferano.it/martolinaincucina/wp-content/uploads/2020/02/Involtini-primavera-B1200x1200.jpg',
                'user_id' => 2
            ],
            [
                'name' => 'Ravioli di verdure',
                'description' => 'Ingredienti: Farina, spinaci, carote, cipolla.',
                'price' => 3.30,
                'visibility' => 1,
                'cover' => 'https://primochef.it/wp-content/uploads/2018/12/SH_Ravioli_verdure_al_vapore.jpg',
                'user_id' => 2
            ],
            [
                'name' => 'Riso al curry',
                'description' => 'Ingredienti: Riso, curry, piselli e uova.',
                'price' => 3.30,
                'visibility' => 1,
                'cover' => 'https://primochef.it/wp-content/uploads/2019/01/SH_riso_con_curry-640x350.jpg.webp',
                'user_id' => 2
            ],
            [
                'name' => 'Zuppa orientale',
                'description' => 'Ingredienti: Piselli, funghi, mazzancolla, salsa di soia, prosciutto.',
                'price' => 3.00,
                'visibility' => 1,
                'cover' => 'https://www.ricettegourmet.com/wp-content/uploads/2016/12/Zuppa-orientale.jpg',
                'user_id' => 2
            ],
            [
                'name' => 'Cous Cous di verdure',
                'description' => 'Ingredienti: Cous cous, verdure di stagione.',
                'price' => 6.60,
                'visibility' => 1,
                'cover' => 'https://d2sj0xby2hzqoy.cloudfront.net/kenwood_italy/attachments/data/000/007/984/medium/cous-cous.jpg',
                'user_id' => 3
            ],
            [
                'name' => 'Spaghetti di mare',
                'description' => 'Ingredienti: Spaghetti, pesce del giorno.',
                'price' => 8.00,
                'visibility' => 1,
                'cover' => 'https://images.lacucinaitaliana.it/gallery/81502/Big/824e4bb7-2416-40b6-9b5a-5beaf2452911.jpg',
                'user_id' => 3
            ],
            [
                'name' => 'Penne all\'arrabbiata',
                'description' => 'Ingredienti: Penne, pomodori pelati, peperoncino secco, prezzemolo.',
                'price' => 6.50,
                'visibility' => 1,
                'cover' => 'https://primochef.it/wp-content/uploads/2019/03/SH_Pasta_arrabbiata-1200x800.jpg',
                'user_id' => 3
            ],
            [
                'name' => 'Tagliatelle al tartufo nero',
                'description' => 'Ingredienti: Tagliatelle, tartufo nero, burro, prezzemolo.',
                'price' => 12.50,
                'visibility' => 1,
                'cover' => 'https://static.cookist.it/wp-content/uploads/sites/21/2018/01/tagliatelle-al-tartufo.jpg',
                'user_id' => 3
            ],
            [
                'name' => 'Coniglio in umido',
                'description' => 'Ingredienti: Coniglio, carote, basilico, vino bianco.',
                'price' => 10.50,
                'visibility' => 1,
                'cover' => 'https://www.melarossa.it/wp-content/uploads/2021/03/coniglio-in-umido-1.jpg',
                'user_id' => 3
            ],
            [
                'name' => 'Gran Crispy McBacon',
                'description' => 'Ingredienti: Carne 100% bovina, bacon croccante, formaggio, salsa crispy.',
                'price' => 5.50,
                'visibility' => 1,
                'cover' => 'https://www.mcdonalds.it/sites/default/files/styles/compressed/public/products/crispy-20anni--mcbacon-hero_desk.jpg?itok=AksAqxjr',
                'user_id' => 4
            ],
            [
                'name' => 'Crispy McWrap',
                'description' => 'Ingredienti: Carne 100% bovina, bacon croccante, formaggio, salsa crispy.',
                'price' => 4.50,
                'visibility' => 1,
                'cover' => 'https://www.mcdonalds.it/sites/default/files/styles/compressed/public/bundle/mcmenu-crispy-wrap-hero-dsk.jpg?itok=uhY1DPvX',
                'user_id' => 4
            ],
            [
                'name' => 'Crispy McWrap',
                'description' => '100% petto di pollo italiano avvolto in una nuova croccante panatura, Pecorino Toscano DOP, insalata, pomodoro, salsa ai tre pepi e pane con semi di sesamo.',
                'price' => 5.50,
                'visibility' => 1,
                'cover' => 'https://www.mcdonalds.it/sites/default/files/styles/compressed/public/bundle/menu-mys-chicken_pepper-hero-dsk.jpg?itok=HAPMbcc9',
                'user_id' => 4
            ],
            [
                'name' => 'Chicken McNuggets',
                'description' => 'Croccantissimi bocconcini di 100% petto di pollo proveniente da allevamenti italiani, allevato a terra, senza mangimi OGM.',
                'price' => 2.50,
                'visibility' => 1,
                'cover' => 'https://www.mcdonalds.it/sites/default/files/styles/compressed/public/bundle/mcmenu_large_McNuggets_desktop.jpg?itok=14iA8gwy',
                'user_id' => 4
            ],
            [
                'name' => 'Caesar Salad con pollo croccante',
                'description' => 'Hai mai provato la Caesar Salad con il petto pollo croccante 100% italiano? La sua gustosa panatura si sposa alla perfezione con il mix di insalata tenera, la dolcezza dei pomodorini ciliegia e il formaggio a scaglie. Un mix di ingredienti dal sapore unico.',
                'price' => 4.00,
                'visibility' => 1,
                'cover' => 'https://www.mcdonalds.it/sites/default/files/styles/compressed/public/bundle/bundle-insalata-pollo_croccante-hero-dsk.jpg?itok=hWRGqIbg',
                'user_id' => 4
            ],
            [
                'name' => 'Nighiri sake',
                'description' => 'Ingredienti: Salmone, riso.',
                'price' => 2.80,
                'visibility' => 1,
                'cover' => 'https://homebeer.it/wp-content/uploads/2019/11/otosan_nigiri_salmone.jpg',
                'user_id' => 5
            ],
            [
                'name' => 'Gunkan maguro',
                'description' => 'Ingredienti: Tonno.',
                'price' => 3.50,
                'visibility' => 1,
                'cover' => 'https://www.sushibe.it/wordpress/wp-content/uploads/2018/04/Gunkan-Maguro-Spicy.jpg',
                'user_id' => 5
            ],
            [
                'name' => 'Hosomaki ebiten',
                'description' => 'Ingredienti: Riso, alghe, gambero in tempura.',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'https://www.youkimagenta.it/wp-content/uploads/2020/03/45.jpg',
                'user_id' => 5
            ],
            [
                'name' => 'Sake tartare',
                'description' => 'Ingredienti: Salmone, avocado, sesamo.',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'https://www.daiki.it/wp-content/uploads/2019/11/IMG_8599.jpg',
                'user_id' => 5
            ],
            [
                'name' => 'Sushi misto',
                'description' => '',
                'price' => 8.90,
                'visibility' => 1,
                'cover' => 'https://www.sakurarc.it/wp-content/uploads/2020/04/55.-sushi-misto.jpg',
                'user_id' => 5
            ],
            [
                'name' => 'Piada salsiccia e patate',
                'description' => 'Ingredienti: Farina, olio evo, acqua, sale, patate e salsiccia',
                'price' => 5.90,
                'visibility' => 1,
                'cover' => 'https://media-cdn.tripadvisor.com/media/photo-s/0c/fe/29/cd/piada-salsiccia-e-patate.jpg',
                'user_id' => 6
            ],
            [
                'name' => 'Piada Lucia',
                'description' => 'Ingredienti: Farina, olio evo, acqua, sale, rucoal, scamorza, pomodorini, cotto',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'https://primochef.it/wp-content/uploads/2020/03/SH_piadina.jpg',
                'user_id' => 6
            ],
            [
                'name' => 'Piada Ernesto',
                'description' => 'Ingredienti: Farina, olio evo, acqua, sale, crudo, rucola, pomodoro, bufala',
                'price' => 6.50,
                'visibility' => 1,
                'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2019/01/piadina-al-crudo.jpg',
                'user_id' => 6
            ],
            [
                'name' => 'Piada Vittoria',
                'description' => 'Ingredienti: Farina, olio evo, acqua, sale, avocado, salmone',
                'price' => 7.50,
                'visibility' => 1,
                'cover' => 'https://www.piadinaromagnola.info/wp-content/uploads/2020/02/piadina-salmone-avocado-scaled-e1581457082394-1024x766.jpg',
                'user_id' => 6
            ],
            [
                'name' => 'Piada Franco',
                'description' => 'Ingredienti: Farina, olio evo, acqua, sale, funghi, speck, crescenza',
                'price' => 6.00,
                'visibility' => 1,
                'cover' => 'https://www.negroni.com/sites/negroni.com/files/piadina-con-prosciutto-crudo-e-funghi.jpg',
                'user_id' => 6
            ],
            [
                'name' => 'Classico',
                'description' => 'Ingredienti: Pane, hamburger da 150g di manzo, cheddar, bacon, insalata, pomodoro, cipolla',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'https://www.mrdoyle.it/wp-content/uploads/2019/01/AdobeStock_209775207-scaled-e1575394210352.jpeg',
                'user_id' => 7
            ],
            [
                'name' => '1987',
                'description' => 'Ingredienti: Hamburger da 150g di Angus, doppio bacon, scamorza, pomodoro',
                'price' => 8.00,
                'visibility' => 1,
                'cover' => 'https://www.tribugolosa.com/media/untitled-collage-jpg_crop.jpeg/rh/hamburger-con-fonduta-di-brie-e-pancetta-croccante.jpg',
                'user_id' => 7
            ],
            [
                'name' => 'Old style',
                'description' => 'Ingredienti: Hamburger da 150g di maiale, soffritto della casa, melanzana, maionese',
                'price' => 7.50,
                'visibility' => 1,
                'cover' => 'https://www.schaer.com/sites/default/files/2016-07/1064_Hamburger%20ai%20capperi%20con%20porri%20e%20melanzane.jpg',
                'user_id' => 7
            ],
            [
                'name' => 'Veggie',
                'description' => 'Ingredienti: Farina, olio evo, lenticchie, carote, cipolla, paprika dolca, dadolata di peperoni',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'https://www.buttalapasta.it/wp-content/uploads/2016/06/Hamburger-di-lenticchie.jpg',
                'user_id' => 7
            ],
            [
                'name' => 'Bismark',
                'description' => 'Ingredienti: Hamburger da 200g mi bovino, bacon, uovo occhio di bue, battuta di aromi',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'https://www.donnamoderna.com/content/uploads/2006/11/Hamburger-alla-Bismarck-ricetta-830x625.jpg',
                'user_id' => 7
            ],
            [
                'name' => 'Pistacchio',
                'description' => 'Ingredienti: Latte, crema di pistacchio e pistacchio.',
                'price' => 2.00,
                'visibility' => 1,
                'cover' => 'https://cdn.shopify.com/s/files/1/0262/8580/1553/products/coppetta-gelato.jpg?v=1590158435',
                'user_id' => 8
            ],
            [
                'name' => 'Fragola',
                'description' => 'Ingredienti: Latte, sciroppo di fragola fragole.',
                'price' => 2.50,
                'visibility' => 1,
                'cover' => 'https://cdn.shopify.com/s/files/1/0262/8580/1553/products/coppetta-fragola.jpg?v=1590159387',
                'user_id' => 8
            ],
            [
                'name' => 'Yin yang',
                'description' => 'Ingredienti: Fior di latte e caffè',
                'price' => 3.00,
                'visibility' => 1,
                'cover' => 'https://cdn.shopify.com/s/files/1/0262/8580/1553/products/coppetta-gelato-panna-piccola.jpg?v=1590158513',
                'user_id' => 8
            ],
            [
                'name' => 'Cioccolato',
                'description' => 'Ingredienti: Latte, cacao',
                'price' => 2.00,
                'visibility' => 1,
                'cover' => 'https://www.tuttogelatoshop.it/wp-content/uploads/2021/02/012_coppetta_cioccolato_fragola_tuttogelato.jpg',
                'user_id' => 8
            ],
            [
                'name' => 'Tropical',
                'description' => 'Ingredienti: Latte, banane, ciliege',
                'price' => 3.50,
                'visibility' => 1,
                'cover' => 'https://www.bombagiu.it/wp-content/uploads/2017/07/gelato-coppetta-600x353-3.jpg',
                'user_id' => 8
            ],
            [
                'name' => 'Pasticcini assortiti',
                'description' => 'Pasticcini vari, prezzo al kg.',
                'price' => 25.00,
                'visibility' => 1,
                'cover' => 'https://redacademy.it/wp-content/uploads/2017/07/mignon-pasticceria-1.jpg',
                'user_id' => 9
            ],
            [
                'name' => 'Sbrisolona',
                'description' => 'Prezzo al kg.',
                'price' => 30.00,
                'visibility' => 1,
                'cover' => 'https://i0.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2018/09/3711_Sbrisolona.jpg?resize=895%2C616&ssl=1',
                'user_id' => 9
            ],
            [
                'name' => 'Sacher',
                'description' => 'Prezzo al kg.',
                'price' => 33.50,
                'visibility' => 1,
                'cover' => 'https://www.buttalapasta.it/wp-content/uploads/2012/07/torta-sacher.jpg',
                'user_id' => 9
            ],
            [
                'name' => 'Millefoglie',
                'description' => 'Prezzo al kg.',
                'price' => 40.50,
                'visibility' => 1,
                'cover' => 'https://matildevicenzi.it/wp-content/uploads/2016/11/Vicenzi-069-e1478278252111.jpg',
                'user_id' => 9
            ],
            [
                'name' => 'Muffin alla nutella',
                'description' => 'Prezzo al kg.',
                'price' => 31.50,
                'visibility' => 1,
                'cover' => 'https://images.fidhouse.com/fidelitynews/wp-content/uploads/sites/6/2015/10/muffin-al-cocco-ripieni-di-Nutella-e1444311173417.jpg?w=580',
                'user_id' => 9
            ],
            [
                'name' => 'Ortolana',
                'description' => 'Ingredienti: Mozzarella, melanzae, cipolla, peperoni, funghi.',
                'price' => 7.50,
                'visibility' => 1,
                'cover' => 'https://i0.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2017/12/3243_Pizza.jpg?resize=895%2C616&ssl=1',
                'user_id' => 10
            ],
            [
                'name' => 'Fiori di zucca e acciughe',
                'description' => 'Ingredienti: Mozzarella, fiori di zucca, acciughe basilico.',
                'price' => 31.50,
                'visibility' => 1,
                'cover' => 'https://www.ricettedalmondo.it/images/foto-ricette/p/31389-pizza-con-fiori-di-zucca-e-alici.jpg',
                'user_id' => 10
            ],
            [
                'name' => 'Trancio di spada alla griglia',
                'description' => 'Ingredienti: Pesce spada.',
                'price' => 8.50,
                'visibility' => 1,
                'cover' => 'https://www.misya.info/wp-content/uploads/2017/03/pesce-spada-alla-piastra.jpg',
                'user_id' => 11
            ],
            [
                'name' => 'Filetto di manzo alla griglia',
                'description' => 'Ingredienti: Manzo Italiano.',
                'price' => 14.50,
                'visibility' => 1,
                'cover' => 'https://www.lacucinadipier.it/wp-content/uploads/2017/09/Filetto-vitello-e1508918901371.jpg',
                'user_id' => 11
            ],
            [
                'name' => 'Tagliere di formaggi',
                'description' => 'Ingredienti: formaggi del giorno.',
                'price' =>7.50,
                'visibility' => 1,
                'cover' => 'https://www.ilgiornaledelcibo.it/wp-content/uploads/2018/01/tagliere-di-formaggi.jpg',
                'user_id' => 11
            ],
            [
                'name' => 'Cotoletta alla milanese',
                'description' => 'Ingredienti: Vitello italiano.',
                'price' => 10.00,
                'visibility' => 1,
                'cover' => 'https://www.divinamilano.it/wp-content/uploads/2020/02/cotoletta-alla-milanese.jpg',
                'user_id' => 11
            ],
            [
                'name' => 'Petto di pollo alla griglia',
                'description' => 'Ingredienti: Pollo italiano alla griglia.',
                'price' => 6.50,
                'visibility' => 1,
                'cover' => 'https://cdn.ilclubdellericette.it/wp-content/uploads/2018/05/petto-pollo-griglia-790x500.jpg',
                'user_id' => 11
            ],
            [
                'name' => 'Maiale funghi e bambù',
                'description' => 'Ingredienti: Carne di maiale, funghi e bambù.',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'https://www.unmondodisapori.it/wp-content/uploads/2017/10/vitellofunghibambu-1.jpg',
                'user_id' => 12
            ],
            [
                'name' => 'Maiale agrodolce',
                'description' => 'Ingredienti: Maiale, peperoni, ananas.',
                'price' => 5.50,
                'visibility' => 1,
                'cover' => 'https://static.cookist.it/wp-content/uploads/sites/21/2017/05/maiale-in-agrodolce-copertina.png',
                'user_id' => 12
            ],
            [
                'name' => 'Spaghetti di soia',
                'description' => 'Ingredienti: Spaghetti di riso, germogli di soia, zucchine, carote.',
                'price' => 3.80,
                'visibility' => 1,
                'cover' => 'https://blog.giallozafferano.it/danicucina/wp-content/uploads/2020/09/DSC_0871q-720x480.jpg',
                'user_id' => 12
            ],
            [
                'name' => 'Ravioli di gambero al vapore',
                'description' => 'Ingredienti: Farina di riso, gamberi.',
                'price' => 2.50,
                'visibility' => 1,
                'cover' => 'https://primochef.it/wp-content/uploads/2016/11/SH_ravioli_cinesi_gamberi_vapore.jpg',
                'user_id' => 12
            ],
            [
                'name' => 'Alghe fritte',
                'description' => 'Ingredienti: alghe fritte.',
                'price' => 3.00,
                'visibility' => 1,
                'cover' => 'https://www.tuttogreen.it/wp-content/uploads/2016/04/shutterstock_255225709.jpg',
                'user_id' => 12
            ],
            [
                'name' => 'Mix pakora',
                'description' => 'Ingredienti: Verdure miste fritte in pastella e spezie.',
                'price' => 4.00,
                'visibility' => 1,
                'cover' => 'https://ikneadtoeat.com/wp-content/uploads/2019/09/Mixed-Vegetable-Pakora-1.jpg',
                'user_id' => 13
            ],
            [
                'name' => 'Samosa',
                'description' => 'Ingredienti: Paste triangolari fritte ripiene di verdure miste.',
                'price' => 4.50,
                'visibility' => 1,
                'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/02/samosa-6.jpg',
                'user_id' => 13
            ],
            [
                'name' => 'Basmati bianco',
                'description' => 'Ingredienti: Riso basmati al vapore.',
                'price' => 2.50,
                'visibility' => 1,
                'cover' => 'https://www.donnesulweb.it/wp-content/uploads/2018/01/cucinare-riso-al-vapore-senza-vaporiera.jpg',
                'user_id' => 13
            ],
            [
                'name' => 'Riso zafferano',
                'description' => 'Ingredienti: Riso basmati allo zafferano e mandorle.',
                'price' => 3.50,
                'visibility' => 1,
                'cover' => 'https://cdn.shortpixel.ai/client/to_avif,q_glossy,ret_img,w_980/https://www.combiyou.it/wp-content/uploads/2018/11/riso-basmati-al-curry.jpg',
                'user_id' => 13
            ],
            [
                'name' => 'Coconut barfi',
                'description' => 'Ingredienti: Cocco, aroma di rose.',
                'price' => 3.00,
                'visibility' => 1,
                'cover' => 'https://nishkitchen.com/wp-content/uploads/2016/03/coconut-burfi-1B-480x480.jpg',
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
