<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedTask extends Model
{
    use HasFactory;

    // Relación con tareas
    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
