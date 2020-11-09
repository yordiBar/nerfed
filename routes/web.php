<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
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


Route::get('/',[PagesController::class,'index']);

Route::get('/gallery',[PagesController::class,'gallery']);

Route::get('/videos',[PagesController::class,'videos']);

Route::get('/contact',[PagesController::class,'contact']);

Route::get('/admin',[PagesController::class,'admin']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
