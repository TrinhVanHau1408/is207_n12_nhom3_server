<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customerId' => Customer::inRandomOrder()->first()->id,
            'totalQuantity' => $this->faker->randomElement([2, 3, 5]),
            'totalMoney' => $this->faker->randomElement([2000000, 30000000, 50000000]),
        ];
    }
}
