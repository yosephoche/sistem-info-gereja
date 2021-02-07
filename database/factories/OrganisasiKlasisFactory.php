<?php

namespace Database\Factories;

use App\Models\OrganisasiKlasis;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Wilayah;

class OrganisasiKlasisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrganisasiKlasis::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name, 
            'klasis_id'=> Wilayah::inRandomOrder()->first()->id, 
            'description' => $this->faker->paragraphs($nb = 3, $asText = true), 
            'status' => $this->faker->boolean
        ];
    }
}
