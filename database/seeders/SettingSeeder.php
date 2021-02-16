<?php

namespace Database\Seeders;

use App\Models\Setting;
use Database\Factories\SettingFactory;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::factory()->create();
    }
}
