<?php

namespace Database\Factories\domain\models;

use App\Domain\Models\warehouse_region;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domain\Models\user>
 */
class warehouse_regionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = warehouse_region::class;

    public function definition(): array
    {
        return
            [
                'warehouse_id' => fake()->numberBetween(1,2),
                'code' => fake()->colorName(),
                'description' => fake()->name(),
            ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
