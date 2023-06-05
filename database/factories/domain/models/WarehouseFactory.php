<?php

namespace Database\Factories\domain\models;

use App\Domain\Models\warehouse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domain\Models\user>
 */
class WarehouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = warehouse::class;

    public function definition(): array
    {
        return
            [
                'code' => fake()->name(),
                'description' => fake()->name(),
                'is_active' => fake()->boolean(),
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
