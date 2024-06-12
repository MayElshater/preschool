<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'no_of_children'
    ];

    public function children()
    {
        return $this->hasMany(Child::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'classes_teachers', 'class_id', 'teacher_id');
    }
}