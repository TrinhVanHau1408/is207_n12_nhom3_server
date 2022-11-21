<?php

namespace Database\Factories;

use App\Models\Color;
use App\Models\Phone;
use App\Models\Ram;
use App\Models\Rom;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phoneId' => Phone::inRandomOrder()->first()->id,
            'ramId' => Ram::inRandomOrder()->first()->id,
            'romId' => Rom::inRandomOrder()->first()->id,
            'colorId' => Color::inRandomOrder()->first()->id,
            'quantity'=> $this->faker->randomElement([20, 50]),
            'percentPrice' =>$this->faker->randomElement([2, 5, 10]),
        ];
    }
}
