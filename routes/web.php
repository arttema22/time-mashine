<?php

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
Route::get('/organization', [OrganizationController::class, 'index'])->name('organization');
Route::get('/organization/{slug}', [OrganizationController::class, 'show'])->name('organization.show');

// Event routes
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/event/{slug}', [EventController::class, 'show'])->name('event.show');


// Affiliation routes
//Route::resource('affiliations', AffiliationController::class);

// Route::middleware([
//     // 'auth:sanctum',
//     // config('jetstream.auth_session'),
//     // 'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
