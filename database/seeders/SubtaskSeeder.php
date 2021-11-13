<?php

namespace Database\Seeders;

use App\Models\Subtask;
use Illuminate\Database\Seeder;

class SubtaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Subtask::create([
        "task_id" => 1,
        "name" => "Migrasi database"
      ]);

      Subtask::create([
        "task_id" => 1,
        "name" => "Coding fitur"
      ]);

      Subtask::create([
        "task_id" => 4,
        "name" => "Belajar h-3 ujian"
      ]);

      Subtask::create([
        "task_id" => 4,
        "name" => "Belajar malamnya"
      ]);
    }
}
