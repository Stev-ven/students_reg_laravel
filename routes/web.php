<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/register', [StudentController::class, 'register'])->name('student.register');
Route::post('/student', [StudentController::class, 'save'])->name('student.save');
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}/update', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{student}/delete', [StudentController::class, 'delete'])->name('student.delete');