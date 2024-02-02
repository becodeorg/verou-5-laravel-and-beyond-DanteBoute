<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\UsersController;
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

Route::get('/sign_up', [UsersController::class, 'create'])->name("showSignUp");
Route::post('/submit_new_user', [UsersController::class, 'store'])->name("submitNewUser");

Route::get('/loginPage', [UsersController::class, 'show'])->name("showLogin");
Route::post('/login', [UsersController::class, 'login'])->name("loginUser");