<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Majelis;
use App\Models\UserProfile;

class MajelisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Majelis::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_profile_id' => UserProfile::factory()->create()->id,
            'periode' => $this->faker->year('now')
        ];
    }
}
