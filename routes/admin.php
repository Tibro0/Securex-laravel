<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AllPageController;
use App\Http\Controllers\Admin\AllServiceNameController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactFormMessageController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\FooterGridOneController;
use App\Http\Controllers\Admin\FooterGridThreeController;
use App\Http\Controllers\Admin\FooterGridTwoController;
use App\Http\Controllers\Admin\FreeQuoteDescriptionController;
use App\Http\Controllers\Admin\FreeQuoteFormInformationController;
use App\Http\Controllers\Admin\OurProjectController;
use App\Http\Controllers\Admin\OurServiceController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WhyChooseUsDescriptionController;
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

/** Why Choose Us Description route */
Route::get('why-choose-us-description-index', [WhyChooseUsDescriptionController::class, 'index'])->name('why-choose-us-description.index');
Route::put('why-choose-us-description-update', [WhyChooseUsDescriptionController::class, 'whyChooseUsDescriptionUpdate'])->name('why-choose-us-description.update');

/** Our Projects route */
Route::resource('category', CategoryController::class);
Route::resource('our-project', OurProjectController::class);

/** Free Quote Description route */
Route::get('free-quote-description-index', [FreeQuoteDescriptionController::class, 'index'])->name('free-quote-description.index');
Route::put('free-quote-description-update', [FreeQuoteDescriptionController::class, 'freeQuoteDescriptionUpdate'])->name('free-quote-description.update');

/** Service Name route */
Route::resource('service-name', AllServiceNameController::class);

/** Free Quote Form Information route */
Route::resource('free-quote-form-information', FreeQuoteFormInformationController::class);

/** Team Members route */
Route::resource('team-member', TeamMemberController::class);

/** Testimonial route */
Route::resource('testimonial', TestimonialController::class);

/** Footer Grid One route */
Route::get('footer-grid-one/index', [FooterGridOneController::class, 'index'])->name('footer-grid-one.index');
Route::put('footer-grid-one/update', [FooterGridOneController::class, 'FooterGridOneUpdate'])->name('footer-grid-one.update');

/** Footer Grid Two route */
Route::resource('footer-grid-two', FooterGridTwoController::class);

/** Footer Grid Three route */
Route::resource('footer-grid-three', FooterGridThreeController::class);

/** Social Links route */
Route::resource('social-link', SocialLinkController::class);

/** About Us Page Content route */
Route::get('about-us/index', [AllPageController::class, 'aboutUsIndex'])->name('about-us.index');
Route::put('about-us/update', [AllPageController::class, 'aboutUsPageUpdate'])->name('about-us-page.update');

/** Service Page Content route */
Route::get('service/index', [AllPageController::class, 'serviceIndex'])->name('service.index');
Route::put('service/update', [AllPageController::class, 'servicePageUpdate'])->name('service-page.update');

/** Terms and Condition Page Content route */
Route::get('terms-and-condition/index', [AllPageController::class, 'termsAndConditionIndex'])->name('terms-and-condition.index');
Route::put('terms-and-condition/update', [AllPageController::class, 'termsAndConditionPageUpdate'])->name('terms-and-condition-page.update');

/** Support Page Content route */
Route::get('support/index', [AllPageController::class, 'supportIndex'])->name('support.index');
Route::put('support/update', [AllPageController::class, 'supportPageUpdate'])->name('support-page.update');

/** Contact Form Page Description route */
Route::get('contact-form-page-description/index', [ContactFormMessageController::class, 'contactFormPageDescriptionIndex'])->name('contact-form-page-description.index');

Route::put('contact-form-page-description/update', [ContactFormMessageController::class, 'contactFormPageDescriptionUpdate'])->name('contact-form-page-description.update');
/** Contact Form Message route */
Route::resource('contact-form-message', ContactFormMessageController::class);
