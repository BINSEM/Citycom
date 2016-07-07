<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\User;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$user = User::all()->last();
        Order::create([
        	'user_id' => $user->id,
        	'commande' => '[]',
        	'statut' => 'en traitement',
        	'livraison' => '',
        ]);
    }
}
