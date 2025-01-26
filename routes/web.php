<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Session;

Route::get('/session', function(){
    return auth()->user();
})->name('questions.index');

Route::get('/clear-session', function(){
    Session::flush();
    return "Session Desrtroyed";
});

Route::get('/', [QuestionController::class,'index'])->name('questions.index');

Route::get('/questions/{question:slug}', [QuestionController::class,'show'])->name('questions.show');
