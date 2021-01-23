<?php

namespace Database\Factories;

use App\Models\Organisasi;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Jemaat;

class OrganisasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organisasi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name, 
            'jemaat_id'=> Jemaat::inRandomOrder()->first()->id, 
            'description' => $this->faker->paragraphs($nb = 3, $asText = true), 
            'status' => $this->faker->boolean
        ];
    }
}
