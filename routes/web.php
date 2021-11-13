<?php

use App\Models\Category;
use App\Models\Colors;
use App\Models\Lists;
use App\Models\Subtask;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  // dd(User::find(2)->list->first()->name);
  // dd(Lists::find(2)->user->name);
  // dd(Lists::find(1)->colors->name);
  // dd(Colors::find(2)->lists->first()->name);
  // dd(Lists::find(2)->task->first()->note);
  // dd(Task::find(2)->lists->name);
  // dd(User::find(2)->task->last()->name);
  // dd(Task::find(3)->user->name);
  // dd(Task::find(1)->subtask->last()->name);
  // dd(Subtask::find(4)->task->name);

  // Relasi dari CATEGORIES ke TASKS (dengan jembatan tabel TaskCategories)
  // dd(Task::find(2)->taskcategory->first()->category->name);
  // dd(Category::find(1)->taskcategory->last()->task->name);
  return view('welcome');
});
