<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Add fake customers data
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'tel' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
        ];
    }
}
