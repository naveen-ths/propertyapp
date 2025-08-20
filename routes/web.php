<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Property\PropertyController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EnquiriesController;
use App\Http\Controllers\Backend\HowItWorkController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\DeveloperController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\ArtisanCommandController;
use App\Http\Controllers\Frontend\PropertyController as FrontendPropertyController ;
use App\Http\Controllers\Frontend\EnquiryController as FrontendEnquiryController;
use App\Http\Controllers\Frontend\SitemapController ;
use App\Http\Controllers\Frontend\HomeController;
use App\Models\HowItWork;
use App\Models\Banner;
use App\Models\Developer;

Route::get('/', [HomeController::class, 'index']);

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
//
//Route::get('/dashboard', function () {
//    return view('backend.admin.dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/admin/property', PropertyController::class);
Route::post('delete', [PropertyController::class, 'delete'])->name('property.delete');

Route::resource('/admin/enquiries', EnquiriesController::class);
Route::get('/admin/enquiries-export', [EnquiriesController::class, 'export'])->middleware(['auth', 'verified'])->name('enquiries.export');

// How It Works CRUD routes
Route::resource('/admin/how-it-works', HowItWorkController::class)->middleware(['auth', 'verified'])->names([
    'index' => 'how-it-works.index',
    'create' => 'how-it-works.create',
    'store' => 'how-it-works.store',
    'show' => 'how-it-works.show',
    'edit' => 'how-it-works.edit',
    'update' => 'how-it-works.update',
    'destroy' => 'how-it-works.destroy',
]);

// Banner Management routes (single banner only)
Route::get('/admin/banner', [BannerController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.banner');
Route::put('/admin/banner', [BannerController::class, 'update'])->middleware(['auth', 'verified'])->name('admin.banner.update');

// Developers CRUD routes
Route::resource('/admin/developers', DeveloperController::class)->middleware(['auth', 'verified'])->names([
    'index' => 'developers.index',
    'create' => 'developers.create',
    'store' => 'developers.store',
    'show' => 'developers.show',
    'edit' => 'developers.edit',
    'update' => 'developers.update',
    'destroy' => 'developers.destroy',
]);

// Investment Opportunities CRUD routes
Route::resource('/admin/investment-opportunities', \App\Http\Controllers\Backend\InvestmentOpportunityController::class)->middleware(['auth', 'verified'])->names([
    'index' => 'investment-opportunities.index',
    'create' => 'investment-opportunities.create',
    'store' => 'investment-opportunities.store',
    'show' => 'investment-opportunities.show',
    'edit' => 'investment-opportunities.edit',
    'update' => 'investment-opportunities.update',
    'destroy' => 'investment-opportunities.destroy',
]);

// Artisan Commands routes (Local environment only)
Route::middleware(['auth', 'verified', 'local.only'])->group(function () {
    Route::get('/admin/artisan', [ArtisanCommandController::class, 'index'])->name('artisan.index');
    Route::post('/admin/artisan/execute', [ArtisanCommandController::class, 'execute'])->name('artisan.execute');
    Route::get('/admin/artisan/system-info', [ArtisanCommandController::class, 'systemInfo'])->name('artisan.system-info');
});

Route::delete('/property/banner-delete/{id}',[PropertyController::class, 'deleteBanner'])->middleware(['auth', 'verified'])->name('property.bannerdelete');
Route::delete('/property/gallery-delete/{id}',[PropertyController::class, 'deleteGallery'])->middleware(['auth', 'verified'])->name('property.gallerydelete');
Route::patch('/property/location-delete',[PropertyController::class, 'locationDelete'])->middleware(['auth', 'verified'])->name('property.locationdelete');

// Settings Management routes
Route::get('/admin/settings', [\App\Http\Controllers\Backend\SettingsController::class, 'index'])->middleware(['auth', 'verified'])->name('settings.index');
Route::put('/admin/settings', [\App\Http\Controllers\Backend\SettingsController::class, 'update'])->middleware(['auth', 'verified'])->name('settings.update');
Route::get('/admin/settings/initialize', [\App\Http\Controllers\Backend\SettingsController::class, 'initializeSettings'])->middleware(['auth', 'verified'])->name('settings.initialize');


// FRONTEND Routes
Route::get('/sitemap', [SitemapController::class, 'index'])->name('frontend.sitemap');
Route::get('/property', [FrontendPropertyController::class, 'index'])->name('frontend.properties');
Route::get('/get-location-data', [HomeController::class, 'getLocationData'])->name('get.location.data');
Route::get('/search', [HomeController::class, 'search'])->name('search.properties');
Route::get('/search-results', [FrontendPropertyController::class, 'searchResults'])->name('search.results');
Route::get('/{slug}', [FrontendPropertyController::class, 'details'])->name('frontend.property.details');
Route::post('/enquiry', [FrontendEnquiryController::class, 'submit'])->name('enquiry.submit');
