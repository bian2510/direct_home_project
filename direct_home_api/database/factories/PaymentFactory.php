<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'divise' => $this->faker->randomElement($array = array ('ARS','USD')),
            'payment_date' => $this->faker->dateTime($max = 'now', $timezone = null),
            'payment_amount' => $this->faker->numberBetween($min = 1000, $max = 50000),
            'payment_method' => $this->faker->randomElement($array = array ('deposito','transferencia','tarjeta de credito', ' tarjeta de debito')),
            'num_transaction'  => $this->faker->numberBetween($min = 111111, $max = 999999)
        ];
    }
}
