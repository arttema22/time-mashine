<?php

use App\Http\Controllers\AffiliationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// People routes
Route::get('/people', [PeopleController::class, 'index'])->name('people');
Route::get('/people/{slug}', [PeopleController::class, 'show'])->name('people.show');

// Organization routes
Route::resource('organizations', OrganizationController::class);

// Affiliation routes
Route::resource('affiliations', AffiliationController::class);

// Event routes
Route::resource('events', EventController::class);

Route::middleware([
    // 'auth:sanctum',
    // config('jetstream.auth_session'),
    // 'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
