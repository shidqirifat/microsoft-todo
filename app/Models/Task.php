<?php

namespace App\Models;

use App\Models\User;
use App\Models\Lists;
use App\Models\Subtask;
use App\Models\TaskCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
  use HasFactory;

  protected $guarded = [
    'id'
  ];

  public function Lists() {
    return $this->belongsTo(Lists::class);
  }

  public function User() {
    return $this->belongsTo(User::class);
  }

  public function Subtask() {
    return $this->hasMany(Subtask::class);
  }

  public function TaskCategory() {
    return $this->hasMany(TaskCategory::class);
  }
}
