<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Jemaat;

class JemaatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jemaat::factory()->times(10)->create();
    }
}
