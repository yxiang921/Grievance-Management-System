<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grievance>
 */
class GrievanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['Received', 'In Progress', 'Closed']),
            'category' => $this->faker->randomElement(['Academic', 'Finance', 'Facility', 'Behaviour', 'Other']),
            'location' => $this->faker->address,
            'department_id' => $this->faker->numberBetween(1, 4), // 限定 department_id 为 1-4
            'user_id' => $this->faker->numberBetween(1, 10), // 假设用户表里有 100 个用户
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
