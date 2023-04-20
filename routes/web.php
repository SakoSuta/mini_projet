<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/auth/user', [UserController::class, 'index'])->name('AllNotes');
    Route::get('/auth/logout', [UserController::class, 'showNote'])->name('NoteID');
});

Route::middleware('auth')->group(function () {
    Route::get('/notes', [NoteController::class, 'index'])->name('AllNotes');
    Route::get('/notes/{id}', [NoteController::class, 'showNote'])->name('NoteID');
    Route::post('/notes', [NoteController::class, 'createNote'])->name('create.note');
    Route::put('/notes/{id}', [NoteController::class, 'updateNote'])->name('update.note');
    Route::delete('/notes/{id}', [NoteController::class, 'deleteNote'])->name('delete.note');
});
