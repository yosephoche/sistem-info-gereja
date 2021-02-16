<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::factory()->times(10)->create();
    }
}
