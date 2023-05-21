<?php

namespace Database\Factories\domain\models;

use App\Domain\Models\role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domain\Models\role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = role::class;

    public function definition(): array
    {
        return [
            'name' => fake() -> colorName(),
        ];
    }
}
