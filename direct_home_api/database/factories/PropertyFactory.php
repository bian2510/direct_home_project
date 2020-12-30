<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text($maxNbChars = 200),
            'price' => $this->faker->numberBetween($min = 10000, $max = 500000),
            'ambient_numbers' => $this->faker->numberBetween($min = 1, $max = 5),
            'property_type' => $this->faker->randomElement($array = array ('apartamento','casa','local'))
        ];
    }
}
