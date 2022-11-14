<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\PaymentMethod;
use App\Models\ShipMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
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
            'orderCode' => $this->faker->unique()->numerify('MK-####'),
            'totalQuantity' => $this->faker->randomElement([2, 3, 5]),
            'totalPrice' => $this->faker->randomElement([2000000, 30000000, 50000000]),
            'paymentId' => PaymentMethod::inRandomOrder()->first()->id,
            'shipId' => ShipMethod::inRandomOrder()->first()->id,
            'noteMess' => $this->faker->paragraph() ,
            'trash' => 0,
        ];
    }
}
