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

        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => 'Received',
            'category' => '',
            'location' => $this->faker->address,
            'department_id' => null,
            'outsource_remark' => $this->faker->sentence,
            'process_remark' => $this->faker->sentence,
            'user_id' => $this->faker->numberBetween(1, 10), // 假设用户表里有 10 个用户
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}
