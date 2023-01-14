<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tradein>
 */
class TradeinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tv_brand' => fake()->name(),
            'tv_model' => fake()->name(),
            'tv_condition' => fake()->name(),
            'packaging' => fake()->name(),
            'tv_age' => fake()->numberBetween(0, 60),
            'tv_accessories' => fake()->name(),
            'tv_value' => fake()->numberBetween(10000, 120000),
            'tv_upgrade' => fake()->name(),
            'topup_amount' => fake()->numberBetween(10000, 120000),
        ];
    }
}
