<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country' => $this->faker->country,
            'city' => $this->faker->state,
            'locality' => $this->faker->city,
            'neighborhood' => $this->faker->citySuffix,
            'street' => $this->faker->streetName,
            'postal_code' => $this->faker->postcode,
            'plaque_number' => $this->faker->buildingNumber,
            'reference' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'latitude' => $this->faker->latitude($min = -90, $max = 90),
            'longitude' => $this->faker->longitude($min = -180, $max = 180),
            'floor'=> $this->faker->numberBetween($min = 0, $max = 20)
        ];
    }
}
