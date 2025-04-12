<?php

use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dasboard', Dashboard::class)->name('dashboard');
