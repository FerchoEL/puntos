<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildrenProfile extends Model
{
    use HasFactory;

    // Relación con tareas completadas
    public function completedTasks()
    {
        return $this->hasMany(CompletedTask::class, 'child_profile_id');
    }

    // Relación con castigos
    public function punishments()
    {
        return $this->hasMany(Punishment::class, 'child_profile_id');
    }

    // Relación con recompensas canjeadas
    public function redeemedRewards()
    {
        return $this->hasMany(RedeemedRewardsHistory::class, 'child_profile_id');
    }
}
