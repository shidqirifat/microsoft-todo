<?php

namespace App\Models;

use App\Models\TaskCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
  use HasFactory;

  protected $guarded = [
    'id'
  ];

  public function TaskCategory() {
    return $this->hasMany(TaskCategory::class);
  }
}
