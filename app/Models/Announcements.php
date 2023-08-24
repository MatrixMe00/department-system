<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory;

    //creating relationships
    public function department(){
        return $this->belongsTo(Department::class);
    }
}
