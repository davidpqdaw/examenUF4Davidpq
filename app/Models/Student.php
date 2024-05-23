<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'birthDate'
        // 'course_id'
    ];
    function course(){
        return $this->hasMany(Course::class);
    }
}
