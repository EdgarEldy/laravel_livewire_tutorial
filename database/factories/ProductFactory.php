<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Load categories
        $categories = array_column(Category::all()->toArray(), 'id');

        return [
            // Add fake products data for testing
            'category_id' => Arr::random($categories),
            'product_name' => $this->faker->name,
            'unit_price' => $this->faker->randomNumber(4)
        ];
    }
}
