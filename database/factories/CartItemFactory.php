<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cartId' => Cart::inRandomOrder()->first()->id ,
            'phoneId'=> Phone::inRandomOrder()->first()->id,
            'quantity' => $this->faker->randomElement([2, 3, 5]),
            'totalMoney' => $this->faker->randomElement([2000000, 30000000, 50000000]),
            'trash' => 0,
        ];
    }
}
