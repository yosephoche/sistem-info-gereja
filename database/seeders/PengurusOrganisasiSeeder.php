<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\PengurusOrganisasi;

class PengurusOrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PengurusOrganisasi::factory()->times(5)->create();
    }
}
