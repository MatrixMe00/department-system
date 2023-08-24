<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    //creating relationships
    public function departments(){
        return $this->hasMany(Department::class, "id");
    }

    public function projects(){
        return $this->hasMany(ResearchProject::class, "faculty_id");
    }

    public function events(){
        return $this->hasMany(Event::class, "faculty_id");
    }
}
