<?php

namespace Database\Seeders;

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
        $role = new Role;
        $role->name = 'superadmin';
        $role->save();

        $role4 = new Role;
        $role4->name = 'admin';
        $role4->save();

        $role5 = new Role;
        $role5->name = 'pengurus_oig';
        $role5->save();
    }
}
