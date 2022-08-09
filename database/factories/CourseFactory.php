<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(User::Class),
            'title' => $this->faker->sentence,
            'subtitle' => $this->faker->sentence,
            'thumbnail' => $this->faker->imageUrl('900', '300'),
            'description' => $this->faker->paragraph('10'),
            'n_weeks' => $this->faker->randomDigit,
            'tutor' => $this->faker->name
        ];
    }
}
