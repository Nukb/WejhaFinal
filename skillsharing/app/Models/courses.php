<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
    public function users() //M:1
    {
        return $this->belongsTo(users::class);
    }

    public function categoties() //M:M
    {
        return $this->hasMany(categories::class);
    }
}
