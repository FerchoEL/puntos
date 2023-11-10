<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableReward extends Model
{
    use HasFactory;

    // Relación con padre
    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }
}
