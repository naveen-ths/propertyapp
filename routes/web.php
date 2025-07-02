<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Property\PropertyController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EnquiriesController;
use App\Http\Controllers\Admin\HowItWorkController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Frontend\PropertyController as FrontendPropertyController ;
use App\Http\Controllers\Frontend\EnquiryController as FrontendEnquiryController;
use App\Http\Controllers\Frontend\SitemapController ;
use App\Models\HowItWork;
use App\Models\Banner;

Route::get('/', function () {
    $howItWorks = HowItWork::active()->ordered()->get();
    $banner = Banner::active()->first();
    return view('welcome', compact('howItWorks', 'banner'));
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
//
//Route::get('/dashboard', function () {
//    return view('backend.admin.dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/admin/property', PropertyController::class);
Route::post('delete', [PropertyController::class, 'delete'])->name('property.delete');

Route::resource('/admin/enquiries', EnquiriesController::class);

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

Route::delete('/property/banner-delete/{id}',[PropertyController::class, 'deleteBanner'])->middleware(['auth', 'verified'])->name('property.bannerdelete');
Route::delete('/property/gallery-delete/{id}',[PropertyController::class, 'deleteGallery'])->middleware(['auth', 'verified'])->name('property.gallerydelete');
Route::patch('/property/location-delete',[PropertyController::class, 'locationDelete'])->middleware(['auth', 'verified'])->name('property.locationdelete');

// FRONTEND Routes
Route::get('/sitemap', [SitemapController::class, 'index'])->name('frontend.sitemap');
Route::get('/property', [FrontendPropertyController::class, 'index'])->name('frontend.properties');
Route::get('/{slug}', [FrontendPropertyController::class, 'details'])->name('frontend.property.details');
Route::post('/enquiry', [FrontendEnquiryController::class, 'submit'])->name('enquiry.submit');
