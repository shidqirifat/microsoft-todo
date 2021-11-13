<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskCategory extends Model
{
    use HasFactory;

    protected $guarded = [
      'id',
      'task_id',
      'category_id'
  ];
}
