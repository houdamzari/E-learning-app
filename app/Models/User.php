<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'courses',
        'user_type'
    ];
    public function student()
    {

        return $this->hasMany(Student::class, 'student_id');
    }
    public function teacher()
    {

        return $this->hasMany(Teacher::class, 'teacher_id');
    }
    public function School()
    {
        return $this->belongsTo(School::class, 'school_id');
    }
    public function posts()
    {
        return $this->hasOne(Post::class);
    }
    public function Courses()
    {
        return $this->HasMany(Course::class, 'course_id');
    }
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
