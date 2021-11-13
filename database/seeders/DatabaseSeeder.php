<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TaskSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ListsSeeder;
use Database\Seeders\ColorsSeeder;
use Database\Seeders\SubtaskSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\TaskCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        $this->call([
          UserSeeder::class,
          ListsSeeder::class,
          ColorsSeeder::class,
          TaskSeeder::class,
          TaskCategorySeeder::class,
          CategorySeeder::class,
          SubtaskSeeder::class,
      ]);
    }
}
