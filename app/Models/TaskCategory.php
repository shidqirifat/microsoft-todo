<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaskCategory extends Model
{
  use HasFactory;

  protected $guarded = [
    'id',
    'task_id',
    'category_id'
  ];

  public function Task() {
    return $this->belongsTo(Task::class);
  }

  public function Category() {
    return $this->belongsTo(Category::class);
  }
}
