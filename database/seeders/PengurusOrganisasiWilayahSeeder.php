<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\PengurusOrganisasiKlasis;

class PengurusOrganisasiWilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PengurusOrganisasiKlasis::factory()->times(5)->create();
    }
}
