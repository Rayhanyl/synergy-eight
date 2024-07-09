<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Email\EmailController;

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

Route::get('/', [LandingPageController::class, 'index'])
    ->name('home');
Route::get('/about', [AboutController::class, 'index'])
    ->name('about');
Route::get('/service/professional', [ServicesController::class, 'service'])
    ->name('professional-service');
Route::get('/service/training', [ServicesController::class, 'training'])
    ->name('training-service');
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');
Route::post('/SendEmail', [EmailController::class, 'sendmail'])
    ->name('sendmail');
