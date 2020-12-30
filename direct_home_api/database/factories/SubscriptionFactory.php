<?php

namespace Database\Factories;

use App\Models\Subscription;
use App\Models\Payment;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subscription::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'init_date' => $this->faker->dateTime($max = 'now', $timezone = null),
            'finish_date' => $this->faker->dateTime($max = 'now', $timezone = null),
            'status' => $this->faker->randomElement($array = array (1, 0))
        ];
    }
}
