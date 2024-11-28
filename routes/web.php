<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\EducationalController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;

Route::get('/app', function () { return view('welcome'); });

Route::get('/page1', [ProfileController::class, 'showProfile']);

Route::get('/page2', [EducationalController::class, 'showEducation']);

Route::get('/app', function () { return view('layouts.app'); });

Route::get('/dashboard', function () { return view('pages.dashboard'); });

Route::get('/book', [BookController::class, 'index']);

Route::get('/add-book-form', [BookController::class, 'show_add_form']);

Route::post('/add-book-form', [BookController::class, 'do_add'])->name('add-book');

Route::delete('/delete-book/{id}', [BookController::class, 'do_delete'])->name('delete-book');

Route::post('/update-book/{id}', [BookController::class, 'do_update'])->name('update-book');

Route::get('/edit-book/{id}', [BookController::class, 'show_edit_form']);
