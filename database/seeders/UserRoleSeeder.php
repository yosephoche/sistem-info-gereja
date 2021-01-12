<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\UserProfile;
use App\Models\Role;
use App\Models\UserRole;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'superadmin';
        $user->email = 'super@mail.com';
        $user->password = Hash::make('super2021');
        $user->save();

        DB::table('user_profiles')->insert([
            'user_id' => $user->id,
            'nama' => 'Superadmin User',
            'is_baptis' => true,
            'is_sidi' => true
        ]);

        $role = new Role;
        $role->name = 'superadmin';
        $role->save();

        $user_role = DB::table('user_roles')->insert([
            'user_id' => $user->id,
            'role_id' => $role->id
        ]);
    }
}
