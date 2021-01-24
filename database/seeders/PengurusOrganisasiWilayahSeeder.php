<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\PengurusOrganisasiWilayah;

class PengurusOrganisasiWilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PengurusOrganisasiWilayah::factory()->times(5)->create();
    }
}
