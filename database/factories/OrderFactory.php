<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $customers= array_column(Customer::all()->toArray(), 'id');
        $products= array_column(Product::all()->toArray(), 'id');

        return [
            // Add orders data for testing
            'customer_id' => Arr::random($customers),
            'product_id' => Arr::random($products),
            'qty' => $this->faker->randomNumber(2),
            'total' => $this->faker->randomNumber(4)
        ];
    }
}
