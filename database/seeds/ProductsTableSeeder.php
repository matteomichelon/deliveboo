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
                'cover' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/1dd71a6b-bd81-4a7a-8013-114c731d1165/Derivates/21db79a0-9d69-44d2-8852-6945bc8fc0de.jpg',
                'user_id' => 2                
            ],
            [
                'name' => 'Margherita',
                'description' => 'La pizza più famosa e più buona del mondo. Ingredienti: pomodoro, mozzarella e basilico.',
                'price' => 6.50,
                'visibility' => 1,
                'cover' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Pizza-napoletana.jpg/1200px-Pizza-napoletana.jpg',
                'user_id' => 1
            ],
            [
                'name' => 'Margherita',
                'description' => 'Classica pizza. Ingredienti: pomodoro, mozzarella e basilico.',
                'price' => 6.00,
                'visibility' => 1,
                'cover' => 'https://www.ricettapizzanapoletana.it/wp-content/uploads/2019/07/pizza-napoletana.jpg',
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
<<<<<<< HEAD
            [
                'name' => 'Tagliata di angus',
                'description' => 'Ingredienti: Controfiletto di Angus',
                'price' => 13.00,
                'visibility' => 1,
                'cover' => 'https://www.ristorantecotcos.it/media/k2/items/cache/fe4bbe81600a40063594e597e00eb05b_L.jpg',
                'user_id' => 14
            ],
            [
                'name' => 'Tagliere si salumi e formaggi',
                'description' => 'Ingredienti: Salumi e formaggi della zona, in base alla disponibilità del giorno.',
                'price' => 9.00,
                'visibility' => 1,
                'cover' => 'https://media-cdn.tripadvisor.com/media/photo-s/0e/03/e8/6c/tagliere-di-salumi-e.jpg',
                'user_id' => 14
            ],
            [
                'name' => 'Risotto alla milanese',
                'description' => 'Ingredienti: Riso carnaroli, zafferano, burro, grana.',
                'price' => 9.00,
                'visibility' => 1,
                'cover' => 'https://www.conad.it/content/dam/conad/conad-consumer/ricette/DayOne%20Ricette/S&D/S&D_RisottoMilanese.jpg',
                'user_id' => 14
            ],
            [
                'name' => 'Caprese di bufala',
                'description' => 'Ingredienti: Mozzarella di bufala D.O.P., pomodoro cuore di bue, basilico, olio evo.',
                'price' => 8.00,
                'visibility' => 1,
                'cover' => 'https://img1.spiiky.com/events/10/80045_0_59c6ba957ab74990ad9ac1da02bde605.jpg?format=webp&quality=80&scale=both&mode=crop&maxwidth=735&maxheight=427&bgcolor=F6F6F6&crop=(3,51,760,490)',
                'user_id' => 14
            ],
            [
                'name' => 'Insalata di pollo',
                'description' => 'Ingredienti: Lattuga, pollo grigliato, capperi, olive.',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/06/insalata-di-pollo/jcr:content/header-par/image-single.img10.jpg/1560261890876.jpg',
                'user_id' => 14
            ],
            [
                'name' => 'French toast',
                'description' => 'Ingredienti: Pane in cassetta, edamer, cotto, uovo occhio di bue, pepe.',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'https://coopmaster.it/blog/wp-content/uploads/2021/01/french-toast.jpg',
                'user_id' => 15
            ],
            [
                'name' => 'Classico',
                'description' => 'Ingredienti: Pane in cassetta, edamer, cotto.',
                'price' => 3.50,
                'visibility' => 1,
                'cover' => 'https://www.negroni.com/sites/negroni.com/files/styles/scale__1440_x_1440_/public/storiatoast.jpg?itok=NqRQjOjM',
                'user_id' => 15
            ],
            [
                'name' => 'Gorgo toast',
                'description' => 'Ingredienti: Pane in cassetta, gorgonzola dolce, confettura di pere fatta in casa, nocciole tostate.',
                'price' => 4.00,
                'visibility' => 1,
                'cover' => 'https://www.igorgorgonzola.com/sistemaNews/newsFoto/videoricette/ricetta-toast-pere-gorgonzola-dolce.jpg',
                'user_id' => 15
            ],
            [
                'name' => 'Toast veggie',
                'description' => 'Ingredienti: Pane in cassetta, uovo in camicia, pesto di avocado e basilico.',
                'price' => 4.50,
                'visibility' => 1,
                'cover' => 'https://static.cookist.it/wp-content/uploads/sites/21/2019/11/toast-con-avocado-e-uova-in-camicia-1200x675.jpg',
                'user_id' => 15
            ],
            [
                'name' => 'Toast gourmet',
                'description' => 'Ingredienti: Pane in cassetta, brie, mortadella, pesto di zucchine e pistacchi.',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'https://capatoast.it/blog/images/articoli/Ricette/Buongustaio/anteprima.jpg',
                'user_id' => 15
            ],
            [
                'name' => 'Tempura di verdure',
                'description' => 'Ingredienti: Verdure del giorno in pastella.',
                'price' => 3.20,
                'visibility' => 1,
                'cover' => 'https://primochef.it/wp-content/uploads/2017/02/SH_tempura_verdure.jpg',
                'user_id' => 16
            ],
            [
                'name' => 'Pollo fritto alla cinese',
                'description' => 'Ingredienti: Bocconcini di pollo fritto in pastella.',
                'price' => 3.40,
                'visibility' => 1,
                'cover' => 'https://blog.giallozafferano.it/delizieinpentola/wp-content/uploads/2021/01/Pollo-fritto.jpg',
                'user_id' => 16
            ],
            [
                'name' => 'Gnocchi di riso',
                'description' => 'Ingredienti: Gnocchi di riso, carote, funghi, zucchine.',
                'price' => 4.00,
                'visibility' => 1,
                'cover' => 'https://m.my-personaltrainer.it/images/ricette/791/gnocchi-riso-verdure.jpg',
                'user_id' => 16
            ],
            [
                'name' => 'Pollo con ananas',
                'description' => 'Ingredienti: Carne di pollo, ananas.',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'https://www.misya.info/wp-content/uploads/2018/02/pollo-all-ananas.jpg',
                'user_id' => 16
            ],
            [
                'name' => 'Manzo al curry',
                'description' => 'Ingredienti: Carne di manzo, patate, curry.',
                'price' => 5.50,
                'visibility' => 1,
                'cover' => 'http://www.kung-food.it/wp-content/uploads/2014/11/spezzatino-di-vitello-al-curry.jpg',
                'user_id' => 16
            ],
            [
                'name' => 'Naan',
                'description' => 'Ingredienti: Focaccia classica cotta nel forno tandoor.',
                'price' => 3.00,
                'visibility' => 1,
                'cover' => 'https://rasamalaysia.com/wp-content/uploads/2019/03/naan2.jpg',
                'user_id' => 17
            ],
            [
                'name' => 'Pollo zafferano',
                'description' => 'Ingredienti: Pollo in pezzi, zafferano e spezie.',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'https://www.lacucinaimperfetta.com/wp-content/uploads/2015/10/Pollo-allo-zafferano.jpg',
                'user_id' => 17
            ],
            [
                'name' => 'Pollo tandori',
                'description' => 'Ingredienti: Fusi di pollo, yogurt, tandori e zenzero.',
                'price' => 5.50,
                'visibility' => 1,
                'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2010/06/ricetta-pollo-tandoori/_jcr_content/header-par/image_single.img10.jpg/1452273814970.jpg',
                'user_id' => 17
            ],
            [
                'name' => 'Lassi',
                'description' => 'Ingredienti: Yogurt, acqua, semi di cumino e cardamomo.',
                'price' => 3.00,
                'visibility' => 1,
                'cover' => 'https://www.greenme.it/wp-content/uploads/2016/07/lassi_indiano.jpg',
                'user_id' => 17
            ],
            [
                'name' => 'Bhel Puri',
                'description' => 'Ingredienti: Riso soffiato, verdure saltate, salsa piccante al tamarindo.',
                'price' => 8.00,
                'visibility' => 1,
                'cover' => 'https://rasamalaysia.com/wp-content/uploads/2019/03/naan2.jpg',
                'user_id' => 17
            ],
            [
                'name' => 'Onion rings',
                'description' => 'Ingredienti: Anelli di cipolla impanati.',
                'price' => 6.00,
                'visibility' => 1,
                'cover' => 'https://www.nuevomundopub.com/PubFoggia/wp-content/uploads/2020/04/onion-rings-1.jpg',
                'user_id' => 18
            ],
            [
                'name' => 'Cheese fried',
                'description' => 'Ingredienti: Anelli di cipolla impanati.',
                'price' => 8.00,
                'visibility' => 1,
                'cover' => 'https://food-fanatic-res.cloudinary.com/iu/s--m7eeADvN--/c_thumb,f_auto,g_auto,h_1200,q_auto,w_1200/v1537755904/fried-cheese-balls-photo',
                'user_id' => 18
            ],
            [
                'name' => 'Hamurger del diablo',
                'description' => 'Ingredienti: Bun con sesamo, doppia carne di bovino da 250g, doppio cheddar, doppio bacon, salsa bbq.',
                'price' => 13.00,
                'visibility' => 1,
                'cover' => 'https://media-cdn.tripadvisor.com/media/photo-s/12/3c/f7/a1/er-grande-doppio-manzo.jpg',
                'user_id' => 18
            ],
            [
                'name' => 'King burger',
                'description' => 'Ingredienti: Bun con sesamo, doppia carne di cavallo da 300g, cheddar, bacon insalata, pomodoro, accompagnata da patatine fritte.',
                'price' => 18.00,
                'visibility' => 1,
                'cover' => 'https://www.piaceriditalia.it/wp/wp-content/uploads/2019/05/AdobeStock_157743662-1500x1069.jpeg',
                'user_id' => 18
            ],
            [
                'name' => 'Beef fajitas',
                'description' => 'Ingredienti: Straccetti di manzo saltati in padella con salsa di soia, peperoni e cipolla, accompagnate da calde tortillas.',
                'price' => 26.00,
                'visibility' => 1,
                'cover' => 'https://www.diablosaloon.com/wp-content/uploads/2020/12/fajits-pavia-1.jpg',
                'user_id' => 18
            ],
            [
                'name' => 'Texas salad',
                'description' => 'Ingredienti: Insalata verde, scaglie di grana, pollo, fagioli, pomodori, mais.',
                'price' => 10.00,
                'visibility' => 1,
                'cover' => 'https://images.otstatic.com/prod/25954352/1/large.jpg',
                'user_id' => 19
            ],
            [
                'name' => 'Chicken caesar salad',
                'description' => 'Ingredienti: Insalata verde, scaglie di grana, crostini di pane, acciughe, pollo, salsa dressing.',
                'price' => 8.00,
                'visibility' => 1,
                'cover' => 'https://i2.wp.com/mygorgeousrecipes.com/wp-content/uploads/2019/01/Grilled-Chicken-Caesar-Salad-with-Heatlhy-Yogurt-Dressing-j6.jpg',
                'user_id' => 19
            ],
            [
                'name' => 'Rib eye',
                'description' => 'Ingredienti: Tenero controfiletto di Black Angus irlandese senza osso 370g. circa, servito con patate al forno, quesadillas e insalata mista.',
                'price' => 18.00,
                'visibility' => 1,
                'cover' => 'https://s3.amazonaws.com/thegrillfather/wp-content/uploads/2019/06/hawaiian-rib-eye-steak-1.jpeg',
                'user_id' => 19
            ],
            [
                'name' => 'Churrasco',
                'description' => 'Ingredienti: Fettine di manzo irlandese (350gr circa) speziato servito con patate fritte e quesadillas.',
                'price' => 14.00,
                'visibility' => 1,
                'cover' => 'http://www.ristorantechacarero.it/uploads/immagini_pagine/piatti/grigliata-gaucha-modific.jpg',
                'user_id' => 19
            ],
            [
                'name' => 'Apple pie',
                'description' => 'Ingredienti: Classica torta di mele all\'americana.',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/02/apple-pie.jpg?w=713&a=c&h=407',
                'user_id' => 19
            ],
            [
                'name' => 'Burritos',
                'description' => 'Ingredienti: Maiale stufato, riso, mais, fagioli messicani.',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/DAC7A66A-BB1B-49AD-95BF-83EF881DEDAE/Derivates/1abc774a-220c-4d98-912a-2ad56675b6a6.jpg',
                'user_id' => 20
            ],
            [
                'name' => 'Tacos di pollo',
                'description' => 'Ingredienti: Pollo grigliato, guacamole tortilla, tabasco.',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'https://www.soniaperonaci.it/wp-content/uploads/2021/01/Tacos-con-pollo-e-guacamole-quadrata-anteprima-960x960.jpg',
                'user_id' => 20
            ],
            [
                'name' => 'Chili',
                'description' => 'Classico chili di carne di manzo alla texana.',
                'price' => 7.00,
                'visibility' => 1,
                'cover' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/4AABF349-67E4-44C5-9C07-153CF5897C3F/Derivates/4F81BC9B-DAD7-4887-B12B-0EC0C1935906.jpg',
                'user_id' => 20
            ],
            [
                'name' => 'Nacho con chili',
                'description' => 'Ingredienti: Nachos con chili alla messicana, guacamole, panna acida.',
                'price' => 9.00,
                'visibility' => 1,
                'cover' => 'https://juegoscocinarpasteleria.org/wp-content/uploads/2020/02/Los-mejores-nachos.jpg',
                'user_id' => 20
            ],
            [
                'name' => 'Quesadilla',
                'description' => 'Ingredienti: Quesadilla ripiena di chili e formaggio cheddar.',
                'price' => 5.00,
                'visibility' => 1,
                'cover' => 'https://images.ctfassets.net/2x1b56neok6m/it-media-3402-asset/cc30deb6cd125328c213169aa955d426/shutterstock_531876007.jpg?w=799&q=50',
                'user_id' => 20
            ],
            [
                'name' => 'Tartare di tonno',
                'description' => 'Ingredienti: Tonno rosso, avocado, menta',
                'price' => 12.00,
                'visibility' => 1,
                'cover' => 'https://cottoecrudo.it/wp-content/uploads/2019/09/tartare-tonno-avocado-tonno-1300x867.jpg',
                'user_id' => 21
            ],
            [
                'name' => 'Plateau dello chef',
                'description' => 'Ingredienti: Plateau di pesce fresco di giornata.',
                'price' => 20.00,
                'visibility' => 1,
                'cover' => 'https://media-cdn.tripadvisor.com/media/photo-s/06/44/f3/59/plateau-di-pesce-crudo.jpg',
                'user_id' => 21
            ],
            [
                'name' => 'Linguine allo scoglio',
                'description' => 'Ingredienti: Linguine, calamari, seppie, gamberi, cozze, prezzemolo.',
                'price' => 12.00,
                'visibility' => 1,
                'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/11/linguine-pescatora.jpg?w=712&a=c&h=406',
                'user_id' => 21
            ],
            [
                'name' => 'Tagliolini all\'astice',
                'description' => 'Ingredienti: Linguine, astice, pomodori cigliegino, peperonicno, prezzemolo.',
                'price' => 15.00,
                'visibility' => 1,
                'cover' => 'https://it.rc-cdn.community.thermomix.com/recipeimage/ydq8wh5d-228ea-357019-d2121-u2wlwfnp/198e07c5-eba3-42cc-a30f-2dfe9a0a80a8/main/linguine-allastice-con-pomodorini.jpg',
                'user_id' => 21
            ],
            [
                'name' => 'Risotto con polipo',
                'description' => 'Ingredienti: Riso carnaroli, polipo, pomodoro ramato, prezzemolo.',
                'price' => 13.00,
                'visibility' => 1,
                'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2011/09/risotto-con-il-polpo.jpg',
                'user_id' => 21
            ],
            [
                'name' => 'Spaghetti alle vongole',
                'description' => 'Ingredienti: Spaghetti, vongole, peperoncino, prezzemolo.',
                'price' => 12.00,
                'visibility' => 1,
                'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/04/spaghetti-alle-vongole-5.jpg',
                'user_id' => 22
            ],
            [
                'name' => 'Seppie alla grigli',
                'description' => 'Ingredienti: Seppie, prezzemolo, limone.',
                'price' => 10.00,
                'visibility' => 1,
                'cover' => 'https://primochef.it/wp-content/uploads/2019/07/SH_seppie_griglia.jpg',
                'user_id' => 22
            ],
            [
                'name' => 'Tonno scottato',
                'description' => 'Ingredienti: Tonno rosso, semi di sesamo, salsa di soia.',
                'price' => 14.00,
                'visibility' => 1,
                'cover' => 'https://static.cookist.it/wp-content/uploads/sites/21/2018/07/tataki-di-tonno.jpg',
                'user_id' => 22
            ],
            [
                'name' => 'Branzino al forno',
                'description' => 'Ingredienti: Branzino, pomodoro, cipolla, prezzemolo.',
                'price' => 9.00,
                'visibility' => 1,
                'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2011/08/branzino-al-forno.jpg',
                'user_id' => 22
            ],
            [
                'name' => 'Lasagne di mare',
                'description' => 'Ingredienti: Lasagne all\'uovo, pesce del giorno, besciamella, prezzemolo.',
                'price' => 9.50,
                'visibility' => 1,
                'cover' => 'https://www.repstatic.it/content/nazionale/img/2020/12/16/235712833-5922acc0-7441-4763-a50a-229e053d404c.jpg',
                'user_id' => 22
            ],
            [
                'name' => 'Gran fritto misto',
                'description' => 'Ingredienti: Triglie, calamari, gamberi, alici impanati e fritti.',
                'price' => 16,00,
                'visibility' => 1,
                'cover' => 'https://www.pizzeriaatarantella.it/wp-content/themes/yootheme/cache/paranza-frittura-mista-49a7e4fa.jpeg',
                'user_id' => 23
            ],
            [
                'name' => 'Trofie ragù di mare',
                'description' => 'Ingredienti: Trofie, ragù con pesce del giorno.',
                'price' => 9.50,
                'visibility' => 1,
                'cover' => 'https://www.repstatic.it/content/nazionale/img/2020/12/16/235712833-5922acc0-7441-4763-a50a-229e053d404c.jpg',
                'user_id' => 23
            ],
            [
                'name' => 'Salmone gratinato',
                'description' => 'Ingredienti: Salmone, panatura dello chef.',
                'price' => 8.50,
                'visibility' => 1,
                'cover' => 'https://www.manjoo.it/wp-content/uploads/large_dsk/1466692322_539_img.jpg',
                'user_id' => 23
            ],
            [
                'name' => 'Grigliata di pesce',
                'description' => 'Ingredienti: Pesce fresco del giorno.',
                'price' => 11.00,
                'visibility' => 1,
                'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2013/04/grigliata-di-pesce.jpg?w=712&a=c&h=406',
                'user_id' => 23
            ],
            [
                'name' => 'Lasagne di mare',
                'description' => 'Ingredienti: Lasagne all\'uovo, pesce del giorno, besciamella, prezzemolo.',
                'price' => 9.50,
                'visibility' => 1,
                'cover' => 'https://www.repstatic.it/content/nazionale/img/2020/12/16/235712833-5922acc0-7441-4763-a50a-229e053d404c.jpg',
                'user_id' => 23
            ],
            [
                'name' => 'Insalata con germogli di soia',
                'description' => 'Ingredienti: Cetrioli, carote, germogli di soia, sesamo, salsa di soia, bamboo.',
                'price' => 3.50,
                'visibility' => 1,
                'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/11/insalata-ai-germogli-di-soia.jpg?w=541&a=c&h=309',
                'user_id' => 24
            ],
            [
                'name' => 'Gamberi sale e pepe',
                'description' => 'Ingredienti: Gamberi, sale, pepe.',
                'price' => 4.50,
                'visibility' => 1,
                'cover' => 'https://i0.wp.com/www.cucinasenzaglutine.it/wp-content/uploads/2020/06/gamberi-sale-e-pepe-cucinasenzaglutine-sito4-scaled.jpg',
                'user_id' => 24
            ],
            [
                'name' => 'Anatra funghi e bambu',
                'description' => 'Ingredienti: Anatra impanata e fritta, bambù, verdure.',
                'price' => 5.50,
                'visibility' => 1,
                'cover' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/f1/99/6a/anatra-con-funghi-e-bambu.jpg',
                'user_id' => 24
            ],
            [
                'name' => 'Bao',
                'description' => 'Ingredienti: Pane cinese al vapore.',
                'price' => 2.50,
                'visibility' => 1,
                'cover' => 'https://www.saporie.com/content/dam/saporie/it/ricette/Panini%20cinesi%20finale_0006%20copia.jpg',
                'user_id' => 24
            ],
            [
                'name' => 'Tempura di patate dolci',
                'description' => 'Patate dolci in pastella.',
                'price' => 3.00,
                'visibility' => 1,
                'cover' => 'https://p0.pikist.com/photos/867/129/tempura-sweet-potato-pumpkin-japanese-food-food.jpg',
                'user_id' => 24
            ],
            [
                'name' => 'Zuppa di wonton',
                'description' => 'Pasta di wonton, zenzero, verza, macinato di maiale, coriandolo.',
                'price' => 4.20,
                'visibility' => 1,
                'cover' => 'https://www.gustissimo.it/articoli/ricette/minestre-creme-zuppe/zuppa-wonton.jpg',
                'user_id' => 25
            ],
            [
                'name' => 'Nuvoletta di drago',
                'description' => 'Fecola di patate e aroma di gamberi, fritti.',
                'price' => 2.00,
                'visibility' => 1,
                'cover' => 'https://timgate.it/ecm/online-content/369/eac/a4d/nuvole-di-drago_d036ef71.jpg',
                'user_id' => 25
            ],
            [
                'name' => 'Tempura di patate dolci',
                'description' => 'Patate dolci in pastella.',
                'price' => 3.90,
                'visibility' => 1,
                'cover' => 'https://p0.pikist.com/photos/867/129/tempura-sweet-potato-pumpkin-japanese-food-food.jpg',
                'user_id' => 25
            ],
            [
                'name' => 'Riso saltato con gamberi',
                'description' => 'Riso basmati, gamberi, zucchine, carote.',
                'price' => 3.10,
                'visibility' => 1,
                'cover' => 'https://www.gnamgnam.it/wp-content/uploads/2017/11/6-riso-saltato-in-padella.jpg',
                'user_id' => 25
            ],
            [
                'name' => 'Calamari fritti',
                'description' => 'Calamari fritti in pastella.',
                'price' => 4.30,
                'visibility' => 1,
                'cover' => 'https://www.sanvitolocapoweb.co.uk/sw_images/ricette/anelli-di-calamari-fritti_14.jpg',
                'user_id' => 25
            ],
            [
                'name' => 'Ravioli alla piastra',
                'description' => 'Ravioli ripieni di carne e verdure alla piastra.',
                'price' => 4.30,
                'visibility' => 1,
                'cover' => 'https://www.ilricettariodibianca.com/wp-content/uploads/2020/05/Schermata-2020-05-20-alle-12.19.40.png?v=1589970175',
                'user_id' => 26
            ],
            [
                'name' => 'Calamari fritti',
                'description' => 'Calamari fritti in pastella.',
                'price' => 4.30,
                'visibility' => 1,
                'cover' => 'https://www.sanvitolocapoweb.co.uk/sw_images/ricette/anelli-di-calamari-fritti_14.jpg',
                'user_id' => 26
            ],
            [
                'name' => 'Calamari fritti',
                'description' => 'Calamari fritti in pastella.',
                'price' => 4.30,
                'visibility' => 1,
                'cover' => 'https://www.sanvitolocapoweb.co.uk/sw_images/ricette/anelli-di-calamari-fritti_14.jpg',
                'user_id' => 26
            ],
            [
                'name' => 'Calamari fritti',
                'description' => 'Calamari fritti in pastella.',
                'price' => 4.30,
                'visibility' => 1,
                'cover' => 'https://www.sanvitolocapoweb.co.uk/sw_images/ricette/anelli-di-calamari-fritti_14.jpg',
                'user_id' => 26
            ],
            [
                'name' => 'Calamari fritti',
                'description' => 'Calamari fritti in pastella.',
                'price' => 4.30,
                'visibility' => 1,
                'cover' => 'https://www.sanvitolocapoweb.co.uk/sw_images/ricette/anelli-di-calamari-fritti_14.jpg',
                'user_id' => 26
            ],
=======
>>>>>>> eb90f7e2d3cc808ba810089ec307c029e49c3a6c



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
