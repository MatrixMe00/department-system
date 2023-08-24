<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $guarded = [];

    //creating relationships
    public function announcements(){
        return $this->hasMany(Announcements::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function programs(){
        return $this->hasMany(Program::class, "department_id");
    }

    public function projects(){
        return $this->hasMany(ResearchProject::class, "department_id");
    }

    public function courses(){
        return $this->hasMany(Course::class, "department_id");
    }

    public function events(){
        return $this->hasMany(Event::class, "department_id");
    }
}
