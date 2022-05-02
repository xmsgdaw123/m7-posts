<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->role = 'admin';
        $role->desc = 'admin';
        $role->save();

        $role = new Role();
        $role-> role = 'user';
        $role->desc = 'user';
        $role->save();

        $role = new Role();
        $role-> role = 'loader';
        $role->desc = 'loader';
        $role->save();

        $role = new Role();
        $role-> role = 'guest';
        $role->desc = 'guest';
        $role->save();
    }
}
