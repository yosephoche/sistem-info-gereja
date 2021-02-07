<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Organisasi;

class OrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organisasi::factory()->times(5)->create();
    }
}
