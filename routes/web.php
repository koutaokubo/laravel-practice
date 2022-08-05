<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

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

Route::prefix('test')->name('test.')->group(function() {
    Route::prefix('section')->name('section.')->group(function() {
        Route::post('one', [SampleController::class, 'post'])->name('one');
        Route::get('two', [SampleController::class, 'get'])->name('two');
    });
    Route::get('laravel', function() {
        return view('welcome');
    })->name('laravel');
});
