<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    public function file() {
        return $this->hasMany(File::class);
    }
    public function groups() {
        return $this->hasMany(Group::class, 'id');
    }
}
