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
        // $table->id();
        // $table->integer('customerId');
        // $table->foreign('customerId')->references('id')->on('customer')->onDelete('cascade');
        // $table->integer('totalQuantity');
        // $table->decimal('totalMoney',15,2);
        // $table->integer('trash');
        // $table->timestamps();
        return [
            'customerId' => Customer::inRandomOrder()->first()->id,
            'totalQuantity' => $this->faker->randomElement([2, 3, 5]),
            'totalMoney' => $this->faker->randomElement([2000000, 30000000, 50000000]),
            'trash' => 0,
        ];
    }
}
