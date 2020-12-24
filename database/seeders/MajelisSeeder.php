<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Majelis;

class MajelisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Majelis::factory()->times(10)->create();
    }
}
