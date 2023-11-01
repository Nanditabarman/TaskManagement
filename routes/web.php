<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Taskcontroller;

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


// Route::get('welcome', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('welcome',[Taskcontroller::class, 'index']);

// Route::view('/', 'Register');
Route::view('/', 'Register')->name("Register");
Route::post('/add', [RegisterController::class, 'store']);

Route::view('login', 'Login')->name("Login");

Route::post('login', [LoginController::class, 'check']);



// get api(create function)
Route::get('tasks/create',[Taskcontroller::class, 'create'])->name('tasks.create');;


// post api( function)
Route::post('tasks/store', [Taskcontroller::class, 'store'])->name('tasks.store');

// view page
// Route::get('/', [Taskcontroller::class, 'index'])->name('tasks.store');
Route::get('tasks', [Taskcontroller::class, 'index'])->name('tasks.store');


// put api(update function)
Route::get('tasks/{id}/edit', [Taskcontroller::class, 'edit'])->name('tasks.edit'); //view page
Route::put('tasks/{id}/update', [Taskcontroller::class, 'update']);


// Delete api(destroy function)
Route::delete('tasks/{task}', [Taskcontroller::class, 'destroy'])->name('tasks.destroy');


// Show Task
Route::get('tasks/{id}/show', [Taskcontroller::class, 'show'])->name('tasks.show');
