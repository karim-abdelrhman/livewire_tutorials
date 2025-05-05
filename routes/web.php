<?php

use App\Livewire\HomePage;
use App\Livewire\UsersPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/users', UsersPage::class)->name('users');

//Route::get('/', function () {
//    return view('index');
//});
