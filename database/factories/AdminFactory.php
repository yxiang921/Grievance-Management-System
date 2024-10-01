<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'admin_name' => $this->faker->name(),
            'admin_username' => $this->faker->unique()->userName(),
            'admin_email' => $this->faker->unique()->safeEmail(),
            'admin_phone_number' => $this->faker->phoneNumber(),
            'admin_password' => bcrypt('12341234'),
        ];
    }
}
