<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

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
    ->name('landingpage.view');
Route::get('/aboutus', [LandingPageController::class, 'aboutus'])
    ->name('aboutus.view');
Route::get('/services', [LandingPageController::class, 'services'])
    ->name('services.view');
Route::get('/contactus', [LandingPageController::class, 'contactus'])
    ->name('contactus.view');