<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
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

Route::get('/admin',[PagesController::class,'admin']);

Route::get('/contact',[ContactController::class,'contact']);

Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
