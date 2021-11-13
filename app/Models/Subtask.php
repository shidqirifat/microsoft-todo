<?php

namespace App\Models;

use App\Models\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subtask extends Model
{
  use HasFactory;

  protected $guarded = [
    'id',
    'task_id'
  ];

  public function Task() {
    return $this->belongsTo(Task::class);
  }
}
