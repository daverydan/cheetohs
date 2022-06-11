<?php

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

// Route::get('/kittens', function () {
//     return view('page-kittens');
// });
Route::get('kittens', [\App\Http\Controllers\LitterController::class, 'index']);

Route::get('/queens ', [\App\Http\Controllers\CatController::class, 'index']);
Route::get('/kings ', [\App\Http\Controllers\CatController::class, 'index']);

// Route::post('contact', function () {
//     dd(request()->all());
// return view('welcome');
// });

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('cat', \App\Http\Controllers\CatController::class);
    Route::resource('litter', \App\Http\Controllers\LitterController::class);
});

require __DIR__ . '/auth.php';
