<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        $course_codes = ["CSC","ICT"];
        return [
            "course_code" => $this->faker->unique()->wordwrap($course_codes[rand(0,1)].rand(100,400), 6),
            "title" => $this->faker->unique()->words(2, true),
            "description" => $this->faker->paragraph(rand(3,5)),
            "department_id" => Department::factory()->create(),
            "faculty_id" => Faculty::factory()->create()
        ];
    }
}
