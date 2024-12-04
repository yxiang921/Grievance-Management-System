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
            'user_id' => $this->faker->numberBetween(1, 10),
            'person_in_charged' => 'person name',
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}
