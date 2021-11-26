<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'Content',
    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'user');
    }
}
