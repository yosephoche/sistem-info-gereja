<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Jemaat;
use App\Models\Klasis;

class JemaatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jemaat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "Jemaat-".$this->faker->name,
            'klasis_id' => Klasis::factory()->create()->id,
        ];
    }
}
