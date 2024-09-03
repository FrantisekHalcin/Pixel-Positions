<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['€60,000 per year', '€3,500 per month', '€130,000 per year', '€1,200 per week']),
            'location' => fake()->randomElement(['remote', fake()->country()]),
            'type' => fake()->randomElement(['Full-time', 'Part-time', 'Seasonal', 'Self']),
            'url' => fake()->url(),
            'featured' => fake()->randomElement([true, false]),
        ];
    }
}
