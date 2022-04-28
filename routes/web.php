<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MathController;
use App\Http\Controllers\NetsIfController;
use App\Http\Controllers\NestController;
use App\Http\Controllers\otherController;
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
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    // CRUD
    Route::get('/landing', [HomeController::class, 'index']);
    Route::get('/create', [HomeController::class, 'create']);
    Route::post('/create', [HomeController::class, 'store']);
    Route::get('/update/{id}/edit', [HomeController::class, 'update']);
    Route::put('/update/{id}/edit', [HomeController::class, 'edit']);
    Route::delete('/delete/{id}', [HomeController::class, 'destroy']);
    Route::get('/detail/{id}', [HomeController::class, 'detail']);
    
    // nested loop
    Route::get('/nestloop', [NestController::class, 'index']);
    Route::post('/nestloop', [NestController::class, 'store']);
    
    // math
    Route::get('/math', [MathController::class, 'index']);
    Route::post('/math', [MathController::class, 'store']);
    
    // nest if
    Route::get('/nestif', [NetsIfController::class, 'index']);
    Route::post('/nestif', [NetsIfController::class, 'store']);
    
    // other
    Route::get('/other', [otherController::class, 'index']);
    Route::post('/other', [otherController::class, 'store']);
});
