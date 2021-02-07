<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\UserProfileSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PekerjaanSeeder;
use Database\Seeders\WilayahSeeder;
use Database\Seeders\KlasisSeeder;
use Database\Seeders\JemaatSeeder;
use Database\Seeders\MajelisSeeder;
use Database\Seeders\KeluargaSeeder;
use Database\Seeders\AnggotaKeluargaSeeder;
use Database\Seeders\OrganisasiSeeder;
use Database\Seeders\PengurusOrganisasiSeeder;
use Database\Seeders\OrganisasiWilayahSeeder;
use Database\Seeders\PengurusOrganisasiWilayahSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\RoleGroupSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            UserProfileSeeder::class,
            PekerjaanSeeder::class,
            WilayahSeeder::class,
            KlasisSeeder::class,
            JemaatSeeder::class,
            MajelisSeeder::class,
            KeluargaSeeder::class,
            AnggotaKeluargaSeeder::class,
            OrganisasiSeeder::class,
            PengurusOrganisasiSeeder::class,
            OrganisasiWilayahSeeder::class,
            PengurusOrganisasiWilayahSeeder::class,
            RoleSeeder::class,
            RoleGroupSeeder::class
        ]);
    }
}
