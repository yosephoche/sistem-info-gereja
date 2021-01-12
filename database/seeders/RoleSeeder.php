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
        // $role = new Role;
        // $role->name = 'superadmin';
        // $role->save();

        $role2 = new Role;
        $role2->name = 'admin_klasis';
        $role2->save();

        $role3 = new Role;
        $role3->name = 'admin_jemaat';
        $role3->save();

        $role4 = new Role;
        $role4->name = 'admin_wilayah';
        $role4->save();

        $role5 = new Role;
        $role5->name = 'admin_oig';
        $role5->save();
    }
}
