<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\Teacher;

class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'teacher_id' => $this->faker->randomDigit(),
            'courses' => Course::all(),
            "user_type" => "teacher"
        ];
    }
}
