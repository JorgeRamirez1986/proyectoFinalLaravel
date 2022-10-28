<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->text(10),
            'slug'=>$this->faker->slug,
            'brand'=>$this->faker->text(15),
            'price'=>random_int(10000,300000),
            'available_size'=>$this->faker->boolean,
            'category_id'=>random_int(1,10),
        ];
    }
}
