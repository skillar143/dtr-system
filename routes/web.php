<?php

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
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.index');

Route::prefix('/employee')->group(function(){
Route::get('/', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
Route::post('/add', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');
Route::put('/update/{id}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/delete/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee.destroy');
});

