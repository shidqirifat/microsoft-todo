<?php

namespace App\Models;

use App\Models\Task;
use App\Models\User;
use App\Models\Colors;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lists extends Model
{
  use HasFactory;

  protected $guarded = [
    'id',
  ];

  public function Task() {
    return $this->hasMany(Task::class);
  }

  public function User() {
    return $this->belongsTo(User::class);
  }

  public function Colors() {
    return $this->belongsTo(Colors::class);
  }

}
