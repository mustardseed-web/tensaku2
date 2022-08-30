<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoyakuController;

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

Route::get('/create', function () {
  return view('resources/views/yoyaku/create.blade.php');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['middleware' => 'auth'],function() {
  Route::get('/create', [YoyakuController::class, 'create'])->name('create');
  });

require __DIR__.'/auth.php';
