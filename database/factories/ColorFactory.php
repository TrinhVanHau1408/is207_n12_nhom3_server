<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ColorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->safeColorName(),
            'percentPrice' =>$this->faker->unique()->randomElement([2, 5, 6, 10]),
            'trash' => 0,
        ];
    }
}
