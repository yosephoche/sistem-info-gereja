<?php

namespace Database\Factories;

use App\Models\PengurusOrganisasiKlasis;
use App\Models\OrganisasiKlasis;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengurusOrganisasiKlasisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PengurusOrganisasiKlasis::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'organisasi_klasis_id' => OrganisasiKlasis::inRandomOrder()->first()->id,
            'jabatan' => $this->faker->name,
            'status' => $this->faker->boolean
        ];
    }
}
