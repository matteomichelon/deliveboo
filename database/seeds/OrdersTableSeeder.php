<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            [
                'code' => 'FNO68143TD',
                'price' => 20.20,
                'status' => 'accepted',
                'date' => '2021-07-12 09:17:35',
                'address' => 'Via Manzoni 25',
                'name' => 'Mario',
                'surname' => 'Bianchi',
                'email' => 'mariobianchi@alice.it',
                'notes' => 'Primo piano',
                'telephone_number' => '3401716567'
            ],
            [
                'code' => 'FNO68143TD',
                'price' => 18.50,
                'status' => 'accepted',
                'date' => '2021-07-15 09:17:35',
                'address' => 'Via Garibaldi 44',
                'name' => 'Valentina',
                'surname' => 'Verdi',
                'email' => 'valentinaverdi@gmail.com',
                'notes' => '',
                'telephone_number' => '3464916567'
            ],
            [
                'code' => 'FNO68143TD',
                'price' => 10.55,
                'status' => 'accepted',
                'date' => '2021-07-10 09:17:35',
                'address' => 'Via Mazzini 108',
                'name' => 'Giuseppe',
                'surname' => 'Bianchi',
                'email' => 'giuseppebianchi@alice.it',
                'notes' => 'Terzo piano',
                'telephone_number' => '3401716123'
            ]
        ];

        foreach($orders as $order) {
            $new_order = new Order;

            $new_order->code = $order['code'];
            $new_order->price = $order['price'];
            $new_order->status = $order['status'];
            $new_order->date = $order['date'];
            $new_order->address = $order['address'];
            $new_order->name = $order['name'];
            $new_order->surname = $order['surname'];
            $new_order->email = $order['email'];
            $new_order->notes = $order['notes'];
            $new_order->telephone_number = $order['telephone_number'];

            $new_order->save();
        }
    }
}
