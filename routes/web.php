<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\PropertyDetails;
use App\Livewire\Properties;
use App\Livewire\Users\Login;
use App\Livewire\Users\Profile;

Route::get('/', Home::class)->name('home');
Route::get('/images/{imageName}', [ImageController::class, 'show'])->name('image.show');
Route::get('/property', PropertyDetails::class)->name('property.details');
Route::get('/properties', Properties::class)->name('properties');
Route::get('/team/login', Login::class)->name('users.login');
Route::get('/user/profile', Profile::class)->name('users.profile');

