<?php

namespace Database\Seeders;

use App\Models\Colors;
use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Colors::create([
        "name" => "Green"
      ]);

      Colors::create([
        "name" => "Yellow"
      ]);
    }
}
