<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\OurServiceController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\WhyChooseUsIconBoxController;
use Illuminate\Support\Facades\Route;

/** Admin  Dashboard*/
Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

/** profile  route*/
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::put('profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::put('profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');

/** slider route */
Route::resource('slider', SliderController::class);

/** detail route */
Route::resource('detail', DetailController::class);

/** About Us route */
Route::get('about-us', [AboutUsController::class, 'index'])->name('about-us.index');
Route::put('about-us/update', [AboutUsController::class, 'aboutUsUpdate'])->name('about-us.update');

/** Our Service route */
Route::resource('our-service', OurServiceController::class);

/** Why Choose Us Icon Box route */
Route::resource('why-choose-us-icon-box', WhyChooseUsIconBoxController::class);
