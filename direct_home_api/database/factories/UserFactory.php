<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->e164PhoneNumber,
            'cuil' => $this->faker->unique()->numberBetween($min = 21000000091, $max = 99999999999),
            'password' => bcrypt('password'),
            'photo' => $this->faker->imageUrl($width = 90, $height = 90),
            'remember_token' => Str::random(10),
            'role_id' => $this->faker->numberBetween($min = 1, $max = 2)

        ];
    }
}
