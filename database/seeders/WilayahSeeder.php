<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Wilayah;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wilayah::factory()->times(10)->create();
    }
}
