<?php

use App\Http\Controllers\ActivityController;
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
Route::get('/', [ActivityController::class, 'home'])->name("showHome");

Route::get('/all_activities', [ActivityController::class, 'index'])->name("showAllActivities");
Route::get('/activity/{id}', [ActivityController::class, 'show'])->name("showActivity");

Route::get('/new_activity', [ActivityController::class, 'create'])->name("showNewActivity");
Route::post('/submit_new_activity', [ActivityController::class, 'store'])->name("submitNewActivity");