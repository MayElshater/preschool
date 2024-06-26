<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Classes;
use App\Models\Parents;

class Child extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'date_of_birth', 'grade' ,'parent_id', 'class_id'];

    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }
    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'children_teachers');
    }
}
