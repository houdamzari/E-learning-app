<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\School;
use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;

class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $student = User::factory()->state(function (array $attributes) {
            return ['user_type' => 'student'];
        })
            ->count(10)->has(Student::factory(), 'student')
            ->create();
        $teacher = User::factory()->state(function (array $attributes) {
            return ['user_type' => 'teacher' ];
        })
            ->count(5)->has(Teacher::factory(), 'teacher')->has(Course::factory(), 'Courses')
            ->create();
        return  [
            'Name' => $this->faker->name(),
            'students' => $student,
            'teachers' => $teacher,
        ];
    }
}
