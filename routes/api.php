<?php

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/assign/{id}',[CharacterController::class, 'assignLetterToNumber'])->name('apiassign');