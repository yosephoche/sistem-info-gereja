<?php

namespace Database\Factories;

use App\Models\UserProfile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'nama' => $this->faker->name,
            'jenis_kelamin' => 'Pria',
            'tanggal_lahir' => now(),
            'alamat' => $this->faker->address,
            'is_baptis' => true,
            'is_sidi' => false
        ];
    }
}
