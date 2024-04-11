<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;

Route::get('/', Home::class);
Route::get('images/{imageName}', [ImageController::class, 'show'])->name('image.show');
