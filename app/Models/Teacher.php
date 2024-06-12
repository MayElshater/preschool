<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name', 'last_name', 'phone', 'email', 'subject'
    ];

    public function children()
    {
        return $this->belongsToMany(Child::class, 'children_teachers');
    }

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'classes_teachers', 'teacher_id', 'class_id');
    }
}
