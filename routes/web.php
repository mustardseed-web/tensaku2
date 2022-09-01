<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoyakuController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth'],function() {
  Route::get('/create', [YoyakuController::class, 'create'])->name('create');
  Route::get('/store', [YoyakuController::class, 'store'])->name('store');
  Route::get('/index', [YoyakuController::class, 'index'])->name('index');
});
require __DIR__.'/auth.php';
