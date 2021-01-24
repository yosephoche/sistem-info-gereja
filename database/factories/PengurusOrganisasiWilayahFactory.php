<?php

namespace Database\Factories;

use App\Models\PengurusOrganisasiWilayah;
use App\Models\OrganisasiWilayah;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengurusOrganisasiWilayahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PengurusOrganisasiWilayah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user' => User::inRandomOrder()->first()->id,
            'organisasi_wilayah_id' => OrganisasiWilayah::inRandomOrder()->first()->id,
            'jabatan' => $this->faker->name,
            'status' => $this->faker->boolean
        ];
    }
}
