<?php

namespace Database\Factories;

use App\Models\Enrolments;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::factory()->create(["role_id"=>3]);
        return [
            "user_id" => $user->id,
            "student_id" => fake()->numerify,
            "enrolment_date" => now()
        ];
    }
}
