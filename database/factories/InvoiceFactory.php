<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number'=> $this->faker->unique()->randomNumber(),
            'date' => $this->faker->date(),
            'total' => rand(213,43242),
            'customer_id' => rand(1,10)
        ];
    }
}
