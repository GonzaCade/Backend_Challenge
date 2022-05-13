<?php

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('home');

Route::resource('posts', '\App\Http\Controllers\PostController');

Route::view('/contacto', 'contacto')->name('contacto');
Route::post('contacto', [\App\Http\Controllers\MessagesController::class, 'store'])->name('contacto');
