<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['prefix' => 'forms', 'as' => 'forms.'], function() {
    Route::get('/', [FormController::class, 'index'])->name('index');
    Route::get('/create', [FormController::class, 'create'])->name('create');
    Route::post('/store', [FormController::class, 'store'])->name('store');
    Route::get('/edit/{form}', [FormController::class, 'edit'])->name('edit');
    Route::put('/update/{form}', [FormController::class, 'update'])->name('update');
    Route::delete('/destroy', [FormController::class, 'destroy'])->name('destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
