<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Parents extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'phone', 'address', 'email'];

    public function children()
    {
        return $this->hasMany(Child::class);
    
    }

}
