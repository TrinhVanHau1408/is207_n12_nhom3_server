<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'orderId' => Order::inRandomOrder()->first()->id,
            'phoneId'=> Phone::inRandomOrder()->first()->id,
            'quantity' => $this->faker->randomElement([2, 3, 5]),
            'priceSale' => $this->faker->randomElement([2000000, 30000000, 50000000]),
            'totalPrice' => $this->faker->randomElement([2000000, 30000000, 50000000]) ,
        ];
    }
}
