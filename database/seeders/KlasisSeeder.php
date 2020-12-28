<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Klasis;

class KlasisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Klasis::factory()->times(10)->create();
    }
}
