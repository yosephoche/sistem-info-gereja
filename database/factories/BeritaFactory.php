<?php

namespace Database\Factories;

use App\Models\Berita;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Berita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            "content" => $this->faker->paragraphs($nb = 5, $asText = true),
            "category" => Category::factory()->create(['name'=> $this->faker->name])->id,
            "author" => User::inRandomOrder()->first()->id
        ];
    }
}
