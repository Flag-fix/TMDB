<?php

use Illuminate\Support\Facades\Route;

Route::prefix('')->name('home.')->group(function (){
    Route::resource('filmes', \App\Http\Controllers\FilmesController::class);
});
