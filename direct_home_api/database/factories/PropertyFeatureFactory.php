<?php

namespace Database\Factories;

use App\Models\PropertyFeature;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFeatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PropertyFeature::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bathrooms' => $this->faker->numberBetween($min = 1, $max = 4),
            'rooms' => $this->faker->numberBetween($min = 0, $max = 6),
            'garages' => $this->faker->numberBetween($min = 0, $max = 3),
            'livings' => $this->faker->numberBetween($min = 1, $max = 5),
            'kitchens' => $this->faker->numberBetween($min = 1, $max = 2),
            'gardens' => $this->faker->numberBetween($min = 0, $max = 2),
            'pools' => $this->faker->numberBetween($min = 0, $max = 2),
            'meters' => $this->faker->numberBetween($min = 20, $max = 200)
        ];
    }
}
