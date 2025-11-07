<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuggestionController;

Route::get('/', [SuggestionController::class, 'index'])->name('home');
Route::post('/suggestion', [SuggestionController::class, 'store'])->name('suggestion.store');
Route::get('/statistics', [SuggestionController::class, 'statistics'])->name('statistics');
Route::get('/contact', [SuggestionController::class, 'contact'])->name('contact');
Route::get('/membership', [SuggestionController::class, 'membership'])->name('membership');
