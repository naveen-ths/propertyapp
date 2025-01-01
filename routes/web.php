<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Property\PropertyController;
use App\Http\Controllers\Frontend\PropertyController as FrontendPropertyController ;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/dashboard', function () {
    return view('backend.admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/admin/property', PropertyController::class);
Route::post('delete', [PropertyController::class, 'delete'])->name('property.delete');


// FRONTEND Routes
Route::get('/property', [FrontendPropertyController::class, 'index'])->name('frontend.properties');
Route::get('/property/{slug}', [FrontendPropertyController::class, 'details'])->name('frontend.property.details');