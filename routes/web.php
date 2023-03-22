<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelpGuideController;
use App\Models\CovidData;

// A default route that simply displays a covid-19 information to all users.
Route::get('/', function () {
    $covid19Data = CovidData::orderBy('date', 'desc')->get();
    return view('welcome', compact('covid19Data'));
});

// This helps to easily define all of the routes necessary for managing Help Guides (Index, Create)
Route::resource('help-guides', HelpGuideController::class);

// Authentication routes provided by Laravel's Auth module.
Auth::routes();

// A route that displays the home page when a user is logged in.
Route::get('/welcome', [HomeController::class, 'index'])->name('welcome');