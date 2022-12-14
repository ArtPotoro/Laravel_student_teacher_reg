<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public function lecture () {
        return $this->hasMany(Lecture::class);
    }
    public function course () {
        return $this->belongsTo(Course::class);
    }
    public function teacher() {
        return $this->belongsTo(User::class, 'type');
    }
    public function student(){
        return $this->hasMany(Student::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
}
