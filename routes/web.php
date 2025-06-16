<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

// Laravel 11 route syntax
Route::get('/events', [EventController::class, 'index']);