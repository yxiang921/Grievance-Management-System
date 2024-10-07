<?php

namespace Database\Factories;

use App\Models\Grievance;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrievanceFactory extends Factory
{
    protected $model = Grievance::class;

    public function definition()
    {
        $created_at = $this->faker->dateTimeBetween('-1 years', 'now');

        $category = $this->faker->randomElement(['Academic', 'Finance', 'Facility', 'Behaviour', 'Other']);

        switch ($category) {
            case 'Academic':
                $department_id = 3;
                break;
            case 'Finance':
                $department_id = 2;
                break;
            case 'Facility':
                $department_id = 1;
                break;
            case 'Behaviour':
                $department_id = 4;
                break;
            case 'Other':
                $department_id = $this->faker->numberBetween(1, 4);
                break;
        }

        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['Received', 'In Progress', 'Closed']),
            'category' => $category,
            'location' => $this->faker->address,
            'department_id' => $department_id,
            'user_id' => $this->faker->numberBetween(1, 10), // 假设用户表里有 10 个用户
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}
