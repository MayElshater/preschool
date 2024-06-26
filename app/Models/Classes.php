<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Classes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'no_of_children','image','price','age','time',
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