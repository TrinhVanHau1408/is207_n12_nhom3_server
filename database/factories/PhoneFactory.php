<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Color;
use App\Models\Ram;
use App\Models\Rom;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $imgArr = [
            'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-trang-1-2-org.jpg', 
            'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-trang-1-2-org.jpg', 
            'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-do-1-1-1-org.jpg',
        ];
        return [
            'name' => $this->faker->unique()->numerify('Điện thoại-####'),
            'categoryId' => Category::inRandomOrder()->first()->id,
            'imgUrl' => $this->faker->randomElement($imgArr),
            'quantity'=> $this->faker->randomElement([20, 50]),
            'priceSale'=> $this->faker->randomElement([50000, 75000]),
            'description' => $this->faker->paragraph(),
            'ramId' => Ram::inRandomOrder()->first()->id,
            'romId' => Rom::inRandomOrder()->first()->id,
            'colorId'=> Color::inRandomOrder()->first()->id,
            'sim'=> $this->faker->randomElement(['Sim 1', 'Sim 2']),
            'screen'=> $this->faker->randomElement(['Screen 1', 'Screen 2']),
            'camera'=> $this->faker->randomElement(['Camera 1', 'Camera 2']),
            'ratingStart' => $this->faker->randomElement([1, 2, 3, 4, 5]),
            'viewCustomer' => $this->faker->randomElement([10, 20, 30, 40, 50]),
        ];
    }
}
