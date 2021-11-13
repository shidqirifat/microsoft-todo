<?php

namespace Database\Seeders;

use App\Models\Lists;
use Illuminate\Database\Seeder;

class ListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Lists::create([
        "colors_id" => 1,
        "user_id" => 1,
        "name" => "Yaumi",
      ]);

      Lists::create([
        "colors_id" => 2,
        "user_id" => 2,
        "name" => "PNJ",
      ]);
    }
}
