<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Frontend\FrontendAllPageController;
use App\Http\Controllers\Frontend\FrontendContactController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\FrontendFreeQuoteFormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/** Admin Auth Routes */
Route::group(['middleware' => 'guest'], function () {
    Route::get('admin/login', [AdminAuthController::class, 'index'])->name('admin.login');
    Route::get('admin/forget-password', [AdminAuthController::class, 'forgetPassword'])->name('admin.forget-password');
});

/** Home Page Route */
Route::get('/', [FrontendController::class, 'index'])->name('home');

/** Free Quote Form Route */
Route::post('free-quote-form', [FrontendFreeQuoteFormController::class, 'freeQuoteFormStore'])->name('free-quote-form.store');

/** Contact Page Route */
Route::get('contact', [FrontendContactController::class, 'index'])->name('contact.index');
Route::post('contact/store', [FrontendContactController::class, 'contactStore'])->name('contact.store');

/** All Page Route */
Route::get('about-us', [FrontendAllPageController::class, 'aboutUsIndex'])->name('about-us');
Route::get('our-service', [FrontendAllPageController::class, 'ourServiceIndex'])->name('our-service');
Route::get('terms-and-condition', [FrontendAllPageController::class, 'termsAndConditionIndex'])->name('terms-and-condition');

Route::get('support', [FrontendAllPageController::class, 'supportIndex'])->name('Support');
require __DIR__.'/auth.php';


