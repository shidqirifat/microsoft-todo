<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Task::create([
        "user_id" => 1,
        "lists_id" => 1,
        "name" => "Project Laravel",
        "due_date" => "2021-11-17"
      ]);

      Task::create([
        "user_id" => 2,
        "lists_id" => 2,
        "name" => "Kerja Kelompok",
        "due_date" => "2021-12-24",
        "reminder_datetime" => "2021-12-22 07:19:22",
        "note" => "Tugas buat video animasi"
      ]);

      Task::create([
        "user_id" => 1,
        "lists_id" => 2,
        "name" => "Web Design",
        "due_date" => "2021-09-11"
      ]);

      Task::create([
        "user_id" => 2,
        "lists_id" => 1,
        "name" => "Ujian Semester",
        "due_date" => "2021-10-21",
        "reminder_datetime" => "2021-12-27 13:46:18",
        "note" => "Ujian semester ganjil pelajaran IPA"
      ]);
    }
}
