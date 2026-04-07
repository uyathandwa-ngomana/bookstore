<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/books', [BookController::class, 'index'])->name('books.index');


Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');


Route::get('/contact', function() {
    return view('contact');
})->name('contact');


Route::get('/restricted', function () {
    return "Restricted Area";
})->middleware('check.age');