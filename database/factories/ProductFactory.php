<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(50000, 500000),
            'image' => 'https://picsum.photos/id/' . $this->faker->numberBetween(10, 110) . '/400/400',
            'discount' => $this->faker->numberBetween(0, 100),
        ];
    }
}
