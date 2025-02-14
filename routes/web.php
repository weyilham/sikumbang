<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ChildrenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('kuisioner', [ChildrenController::class, 'index'])->name('kuisioner');
Route::post('children/store', [ChildrenController::class, 'store'])->name('children.store');
Route::post('/answers/store', [AnswerController::class, 'store'])->name('answers.store');
