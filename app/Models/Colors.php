<?php

namespace App\Models;

use App\Models\Lists;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Colors extends Model
{
    use HasFactory;

    protected $guarded = [
      'id'
    ];

    public function Lists() {
      return $this->hasMany(Lists::class);
    }
}
