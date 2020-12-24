<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Pekerjaan;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pekerjaan::factory()->times(10)->create();
    }
}
