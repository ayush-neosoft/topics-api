<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::create(['name' => 'Admin']);
        $user_role = Role::create(['name' => 'User']);

        $user = User::create([
        	'name' => 'Ayush Likhar',
        	'email' => 'ayush.likhar@neosofttech.com',
        	'password' => Hash::make('password')
        ]);

        $user->assignRole($admin_role);
    }
}
