<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
  use HasFactory;

  protected $guarded = [
    'id',
    'color_id',
    'user_id'
  ];

}
