<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', function () {
        return redirect()->route('schedules.index');
    })->name('schedule');
    Route::resource('/schedules', ScheduleController::class);
});

Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules.index');

Route::get('/schedules/create', [ScheduleController::class, 'create'])->name('schedules.create');
Route::post('/schedules', [ScheduleController::class, 'store'])->name('schedules.store');

Route::get('/schedules/{schedule}/edit', [ScheduleController::class, 'edit'])->name('schedules.edit');
Route::patch('/schedules/{schedule}', [ScheduleController::class, 'update'])->name('schedules.update');

Route::delete('/schedules/{schedule}',  [ScheduleController::class, 'destroy'])->name('schedules.destroy');