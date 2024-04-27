<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\PropertyDetails;
use App\Livewire\Users\Login;

Route::get('/', Home::class)->name('home');
Route::get('/images/{imageName}', [ImageController::class, 'show'])->name('image.show');
Route::get('/property', PropertyDetails::class)->name('property.details');
Route::get('/team/login', Login::class)->name('users.login');
