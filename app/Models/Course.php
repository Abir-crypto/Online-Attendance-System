<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class);
    }
}
