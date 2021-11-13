<?php

namespace Database\Seeders;

use App\Models\TaskCategory;
use Illuminate\Database\Seeder;

class TaskCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      TaskCategory::create([
        "task_id" => 1,
        "category_id" => 1
      ]);

      TaskCategory::create([
        "task_id" => 2,
        "category_id" => 2
      ]);

      TaskCategory::create([
        "task_id" => 3,
        "category_id" => 1
      ]);

      TaskCategory::create([
        "task_id" => 4,
        "category_id" => 2
      ]);
    }
}
