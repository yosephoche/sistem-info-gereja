<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Sektor;

class SektorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sektor::factory()->times(10)->create();
    }
}
