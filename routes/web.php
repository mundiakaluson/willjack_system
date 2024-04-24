<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\PropertyDetails;

Route::get('/', Home::class)->name('home');
Route::get('/images/{imageName}', [ImageController::class, 'show'])->name('image.show');
Route::get('/property', PropertyDetails::class)->name('property.details');
