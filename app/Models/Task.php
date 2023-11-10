<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Relación con tareas completadas
    public function completedTasks()
    {
        return $this->hasMany(CompletedTask::class, 'task_id');
    }
}
