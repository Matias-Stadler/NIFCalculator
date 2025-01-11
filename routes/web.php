<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LetterController;

Route::get('/',[LetterController::class, 'index'])->name('home');
Route::get('/letters/{id}', [LetterController::class, 'show'])->name('show');