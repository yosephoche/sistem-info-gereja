<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\AnggotaKeluarga;

class AnggotaKeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnggotaKeluarga::factory()->times(10)->create();
    }
}
