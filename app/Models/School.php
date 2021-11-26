<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $casts = [
        'students' => 'array',
        'teachers' => 'array'
    ];
    protected $fillable = [
        'Name',
        "students",
        "teachers"
    ];
    public function User()
    {
        return $this->hasMany(User::class, 'users');
    }
}
