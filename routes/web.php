<?php

use App\Http\Controllers\MagicnoteController;
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
});

Route::get('/show',[MagicnoteController::class,'show']);
Route::post('/create',[MagicnoteController::class,'store']);
Route::get('/delete/{id}',[MagicnoteController::class,'destroy']);
Route::post('/submit',[MagicnoteController::class,'store']);
Route::get('/create/{id}',[MagicnoteController::class,'create']);
Route::post('/update/{id}',[MagicnoteController::class,'update'])->name('name.update');
