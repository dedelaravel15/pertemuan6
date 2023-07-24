<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TaskController::class, 'index'])->name('index');

//route untuk menampilkan task

Route::get('task/{id}', [TaskController::class, 'show'])->name('show');
