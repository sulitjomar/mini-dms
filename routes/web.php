<?php

use App\Livewire\Dashboard;
use App\Livewire\Inventory\Form;
use App\Livewire\Inventory\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dasboard', Dashboard::class)->name('dashboard');
Route::get('/inventory', Index::class)->name('inventory.index');
Route::get('/inventory/form', Form::class)->name('inventory.form');
Route::get('/inventory/form/{vehicle?}', Form::class)->name('inventory.form.edit');