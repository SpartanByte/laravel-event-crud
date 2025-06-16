<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;

// Laravel 11 route syntax

// Pages
Route::get('/', [PageController::class, 'home'])->name('home');

// Events
Route::get('/events', [EventController::class, 'index'])->name('events');