<?php

use App\Livewire\pages\ContactUsPage;
use App\Livewire\pages\HomePage;
use App\Livewire\pages\UsersPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/users', UsersPage::class)->name('users');
Route::get('/contact-us', ContactUsPage::class)->name('contact');

//Route::get('/', function () {
//    return view('index');
//});
