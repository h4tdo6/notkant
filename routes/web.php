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

// Route::get('/messages', [NavigationController::class, 'direct'])->name('messages.direct');
// Route::get('/messages', [NavigationController::class, 'request'])->name('messages.request');

Route::get('/messages/direct', [NavigationController::class, 'blankMessage'])->name('direct.blank');
Route::get('/messages/direct/aquinas', [NavigationController::class, 'aquinasMessage'])->name('direct.aquinas');
Route::get('/messages/direct/aristotle', [NavigationController::class, 'aristotleMessage'])->name('direct.aristotle');

Route::get('/messages/request', [NavigationController::class, 'blankRequest'])->name('requests.blank');
Route::get('/messages/request/plato', [NavigationController::class, 'platoRequest'])->name('requests.plato');
Route::get('/messages/request/socrates', [NavigationController::class, 'socratesRequest'])->name('requests.socrates');

Route::get('/members', [NavigationController::class, 'members'])->name('members');
Route::get('/references', [NavigationController::class, 'references'])->name('references');
