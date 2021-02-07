<?php

namespace Database\Factories;

use App\Models\PengurusOrganisasi;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Organisasi;

class PengurusOrganisasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PengurusOrganisasi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'organisasi_id' => Organisasi::inRandomOrder()->first()->id,
            'jabatan' => $this->faker->name,
            'status' => $this->faker->boolean
        ];
    }
}
