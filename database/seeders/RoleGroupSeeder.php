<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\RoleGroup;

class RoleGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new RoleGroup;
        $role->name = 'Wilayah';
        $role->save();

        $role = new RoleGroup;
        $role->name = 'Klasis';
        $role->save();

        $role = new RoleGroup;
        $role->name = 'Jemaat';
        $role->save();
    }
}
