<?php

use App\Models;
use App\Models\Cvbank;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\emailNotification;

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


// All CVs





Route::get('/', [CvController::class, 'index'])->middleware('auth');
//Route::get('/search', 'CvController@search');

// Store CV
Route::post('/cvs',[CvController::class, 'store'])->middleware('auth');


// show create form
Route::get('/cvs/create',[CvController::class, 'create'])->middleware('auth');

// edit form

Route::get('/{cv}/edit',[CvController::class, 'edit'])->middleware('auth');

//update cv

Route::put('/{cv}',[CvController::class, 'update'])->middleware('auth');

//delete cv

Route::delete('/{cv}',[CvController::class, 'destroy'])->middleware('auth');

//show Register     /create form
Route::get('/register',[UserController::class, 'create'])->middleware(['auth', 'isAdmin']);

//create new user

Route::post('/users', [UserController::class, 'store']);

// Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');



// show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// submit login form
Route::post('/users/authenticate', [UserController::class, 'authenticate']);



// Single CV
Route::get('/{cv}',[CvController::class, 'show'])->middleware('auth');






