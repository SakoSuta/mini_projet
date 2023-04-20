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
    Route::get('/notes', [NoteController::class, 'index'])->name('AllNotes');
    Route::post('/note/create', [NoteController::class, 'createNote'])->name('create.note');
    Route::post('/note/update/{id}', [NoteController::class, 'updateNote'])->name('update.note');
    Route::get('/note/{id}', [NoteController::class, 'showNote'])->name('NoteID');
    Route::get('/delete/{id}', [NoteController::class, 'deleteNote'])->name('delete.note');
});
