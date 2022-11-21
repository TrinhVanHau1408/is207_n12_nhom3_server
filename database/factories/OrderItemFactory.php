<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\PhoneDetail;
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
            'phoneName' => 'Chưa có biết làm sao tự động hiện ra',
            'phoneDetailId'=> PhoneDetail::inRandomOrder()->first()->id,
            'quantity' => $this->faker->randomElement([2, 3, 5]),
            'priceSale' => $this->faker->randomElement([2000000, 30000000, 50000000]),
            'totalMoney' => $this->faker->randomElement([2000000, 30000000, 50000000]) ,
        ];
    }
}
