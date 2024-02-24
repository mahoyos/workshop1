<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'image' => $this->faker->imageUrl(),
            'brand' => $this->faker->word,
            'keywords' => json_encode([$this->faker->word, $this->faker->word, $this->faker->word]),
            'price' => $this->faker->numberBetween($min = 200, $max = 9000),
            'stock' => $this->faker->numberBetween($min = 1, $max = 100),
            'description' => $this->faker->paragraph,

        ];
    }
}
