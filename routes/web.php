<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
});
Route::get('/welcome', function(){
    return view('welcome');
});
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
