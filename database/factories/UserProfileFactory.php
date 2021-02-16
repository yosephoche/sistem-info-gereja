<?php

namespace Database\Factories;

use App\Models\Jemaat;
use App\Models\Klasis;
use App\Models\Pekerjaan;
use App\Models\UserProfile;
use App\Models\User;
use App\Models\Wilayah;
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
            'user_id' => User::inRandomOrder()->first()->id,
            'nama' => $this->faker->name,
            'jenis_kelamin' => 'Pria',
            'tanggal_lahir' => now(),
            'alamat' => $this->faker->address,
            'pekerjaan_id' => Pekerjaan::inRandomOrder()->first()->id,
            'is_baptis' => true,
            'is_sidi' => false,
            'jemaat_id' => Jemaat::inRandomOrder()->first()->id,
            'klasis_id' => Klasis::inRandomOrder()->first()->id,
            'wilayah_id' => Wilayah::inRandomOrder()->first()->id
        ];
    }
}
