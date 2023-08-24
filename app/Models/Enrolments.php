<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolments extends Model
{
    use HasFactory;

    //creating relationships
    public function students(){
        return $this->hasMany(Student::class, "student_id");
    }

    public function courses(){
        return $this->hasMany(Courses::class);
    }
}
