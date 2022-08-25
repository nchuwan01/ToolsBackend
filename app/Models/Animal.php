<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    public function category()
    {
//        // hasOne, belongsTo,  hasMany, belongsToMany
//        // An animal belongsTo a Category
        return $this->belongsTo(Category::class);
    }
}
