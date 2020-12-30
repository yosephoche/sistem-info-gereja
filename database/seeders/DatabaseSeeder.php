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
            UserProfileSeeder::class,
            PekerjaanSeeder::class,
            WilayahSeeder::class,
            KlasisSeeder::class,
            JemaatSeeder::class,
            MajelisSeeder::class,
            KeluargaSeeder::class,
            AnggotaKeluargaSeeder::class,

        ]);
    }
}
