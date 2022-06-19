<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class,'index']);

Route::get('/redirects',[HomeController::class,'redirects']);
Route::post('/makereservation',[HomeController::class, 'makereservation']);


Route::get('/users',[AdminController::class,'users']);
Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);

Route::get('/food',[AdminController::class,'food']);
Route::get('/foodmenu',[AdminController::class,'foodmenu']);
Route::get('/removefood',[AdminController::class,'removefood']);
Route::get('/remove/{id}',[AdminController::class,'remove']);
Route::post('/uploadfood',[AdminController::class,'uploadfood']);
Route::get('/updatefood/{id}',[AdminController::class,'updatefood']);
Route::post('/update/{id}',[AdminController::class,'update']);

Route::get('/adminreservation',[AdminController::class,'adminreservation']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
