<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [NavigationController::class, 'home'])->name('home');
Route::get('/search', [NavigationController::class, 'search'])->name('search');
Route::get('/explore', [NavigationController::class, 'explore'])->name('explore');
Route::get('/messages', [NavigationController::class, 'messages'])->name('messages');
Route::get('/notifications', [NavigationController::class, 'notifications'])->name('notifications');
Route::get('/members', [NavigationController::class, 'members'])->name('members');
Route::get('/references', [NavigationController::class, 'references'])->name('references');
