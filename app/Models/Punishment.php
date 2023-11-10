<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punishment extends Model
{
    use HasFactory;

    // Relación con niño
    public function childProfile()
    {
        return $this->belongsTo(ChildrenProfile::class, 'child_profile_id');
    }
}
