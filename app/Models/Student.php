<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'courses',
        'user_type'
    ];
    protected $casts = [
        'courses' => 'array'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function Courses()
    {
        return $this->HasMany(Course::class, 'course_id');
    }
}
