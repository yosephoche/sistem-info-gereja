<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\AnggotaKeluarga;
use App\Models\UserProfile;
use App\Models\Keluarga;

class AnggotaKeluargaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AnggotaKeluarga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_profile_id' => UserProfile::factory()->create()->id,
            'keluarga_id' => Keluarga::factory()->create()->id,
        ];
    }
}
