<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\OrganisasiKlasis;

class OrganisasiWilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrganisasiKlasis::factory()->times(5)->create();
    }
}
