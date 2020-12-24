<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Keluarga;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keluarga::factory()->times(10)->create();
    }
}
