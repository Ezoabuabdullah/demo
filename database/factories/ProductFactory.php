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
    public function definition(): array
    {
        return [
        'name'=>fake()->name(),
        'price'=>fake()->numberBetween(1,10000),
        'description'=>fake()->paragraph(),
        'category'=>fake()->name(),
        'price_after_discount'=>fake()->numberBetween(1,1000)
        ];
    }
}
