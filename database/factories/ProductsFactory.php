<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Seller;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageLinks = [
            'https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f',
            'https://images.unsplash.com/photo-1506744038136-46273834b3fb',
            'https://images.unsplash.com/photo-1498050108023-c5249f4df085',
            'https://images.unsplash.com/photo-1518770660439-4636190af475',
            'https://images.unsplash.com/photo-1504384308090-c894fdcc538d',
        ];
        return [
            'product_name' => fake()->domainWord(),
            'product_stocks' => fake()->numberBetween(1, 500),
            'product_price' => fake()->numberBetween(120, 1100),
            'product_sold' => fake()->numberBetween(20, 4000),
            'product_image'  => fake()->randomElement($imageLinks),
            'product_sale' => fake()->boolean(),
            'product_sale_percent' => fake()->numberBetween(10, 95),
            'product_sale_off' => fake()->numberBetween(5, 40),
            'product_near' => fake()->boolean(),
            'product_free_shipping' => fake()->boolean(),
            'seller_id' => Seller::inRandomOrder()->first()->id,
        ];
    }
}
