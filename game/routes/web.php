<?php

use App\Http\Controllers\GameController;

Route::get('/', [GameController::class, 'index']);
Route::post('/play', [GameController::class, 'play'])->name('play');