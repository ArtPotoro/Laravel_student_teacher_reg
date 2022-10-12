<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsToMany(User::class, 'students');
    }
    public function groups() {
        return $this->belongsToMany(Group::class, 'students');
    }
}
