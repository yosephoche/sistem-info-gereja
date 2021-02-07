<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Artikel;
use App\Models\Category;
use App\Models\User;

class ArtikelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artikel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'content' => $this->faker->paragraphs($nb = 5, $asText = true),
            'meta_title' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'slug' => $this->faker->slug,
            'meta_description' => $this->faker->text,
            'image' => $this->faker->image(public_path('images'), 640, 480, null, false),
            'category' => Category::factory()->create(['name'=> $this->faker->name])->id,
            'author' => User::inRandomOrder()->first()->id,
            'is_published' => $this->faker->boolean,
        ];
    }
}
