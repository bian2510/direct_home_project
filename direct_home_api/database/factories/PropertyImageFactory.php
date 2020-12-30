<?php

namespace Database\Factories;

use App\Models\PropertyImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PropertyImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image_1' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_2' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_3' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_4' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_5' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_6' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_7' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_8' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_9' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_10' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_11' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_12' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_13' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_14' => $this->faker->imageUrl($width = 640, $height = 480),
            'image_15' => $this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}
