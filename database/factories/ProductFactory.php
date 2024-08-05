<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'ean' => fake()->regexify('[0-9]{13}'),
            'name' => fake()->words(2, true),
            'is_active' => true,
        ];
    }
}
