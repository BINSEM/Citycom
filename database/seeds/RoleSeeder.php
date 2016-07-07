<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $count = DB::table('roles')->count();
        if ($count == 0) {
	    	Role::create(['nom' => 'admin']);
	    	Role::create(['nom' => 'user']);
        }
    }
}
