<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedeemedRewardsHistory extends Model
{
    use HasFactory;

    // Relación con niño y recompensa disponible
    public function childProfile()
    {
        return $this->belongsTo(ChildrenProfile::class, 'child_profile_id');
    }

    public function availableReward()
    {
        return $this->belongsTo(AvailableReward::class, 'available_reward_id');
    }
}
