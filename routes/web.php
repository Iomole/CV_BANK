<?php

use Illuminate\Support\Facades\Route;
use App\Models;
use App\Models\Cv_bank;

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

Route::get('/', function () {
    return view('cv_bank', [
        'heading' => ' CV List',
        'cv_list' => Cv_bank::all()

    ]);
});

// Single CV
Route::get('cv_bank/{id}',function($id){
    return view('cv', [
        'list' => Cv_bank::find($id)
    ]);

});
