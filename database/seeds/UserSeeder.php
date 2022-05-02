<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $user = new User();
        $user->username = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('123');
        $user->role_id = Role::where('role', 'admin')->first()->id;
        $user->save();

        $user = new User();
        $user->username = 'User';
        $user->email = 'user@gmail.com';
        $user->password = Hash::make('123');
        $user->role_id = Role::where('role', 'user')->first()->id;
        $user->save();

        $user = new User();
        $user->username = 'Loader';
        $user->email = 'loader@gmail.com';
        $user->password = Hash::make('123');
        $user->role_id = Role::where('role', 'loader')->first()->id;
        $user->save();

        $user = new User();
        $user->username = 'Guest';
        $user->email = 'guest@gmail.com';
        $user->password = Hash::make('123');
        $user->role_id = Role::where('role', 'guest')->first()->id;
        $user->save();
    }
}
