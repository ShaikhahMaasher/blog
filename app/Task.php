<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeInComplete($query) // Using query scope
    {
       return $query->where('isCompleted', 0);
    }
}
