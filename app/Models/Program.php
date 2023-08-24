<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    //relations
    public function students(){
        return $this->hasMany(Student::class, "program_id");
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function faculty(){
        return $this->department->faculty;
    }
}
