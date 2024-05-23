<?php

use App\Livewire\Dashboard;
use App\Livewire\Hotels\HotelCreate;
use App\Livewire\Hotels\HotelList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class);

Route::get('/hotel', HotelList::class);
Route::get('/hotel/create', HotelCreate::class);