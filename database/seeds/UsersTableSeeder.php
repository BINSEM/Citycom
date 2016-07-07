<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$admin = User::where('name', 'Admin');
    	$admin->delete();
        $role = Role::where('nom', 'admin')->first();
   		$user = new User;
        $user->name = 'Admin';
    	$user->email = 'admin@rocks.com';
    	$user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role);
    }
}
