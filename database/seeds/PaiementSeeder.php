<?php

use Illuminate\Database\Seeder;
use App\Paiement;

class PaiementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $count = DB::table('paiements')->count();
        if ($count == 0) {
	    	Paiement::create(['nom' => 'cheque']);
	    	Paiement::create(['nom' => 'rib']);
	    	Paiement::create(['nom' => 'paypal']);
        }
    }
}
