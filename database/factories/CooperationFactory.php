<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cooperation>
 */
class CooperationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'country_id' => mt_rand(1, 14),
            'industry_id' => mt_rand(1, 8),
            'organizationtype_id' => mt_rand(1, 4),
            'name' => $this->faker->company,
            'cooperation_started_from' => now(),
        ];
    }
}
