<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminGalleryController;
use App\Models\Gallery;
use App\Http\Controllers\AdminCourseController;
use App\Models\Course;
use App\Http\Controllers\AdminAboutController;
use App\Models\About;
use App\Http\Controllers\AdminUpcomingController;
use App\Models\Upcoming;
use App\Models\Review;
use App\Http\Controllers\AdminReviewController;
use App\Http\Controllers\AdminBenefitController;
use App\Models\Benefit;
use App\Http\Controllers\AdminFaqController;
use App\Models\Faq;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminRecordingController;
use App\Models\Recording;

Route::get('/', function () {

    $galleries = Gallery::where('status', true)->latest()->get();
    $courses = Course::where('status', true)->latest()->get();
    $about = About::where('status', true)->latest()->first();
    $upcoming = Upcoming::where('status', true)->latest()->first();

    $reviews = Review::where('status', true)->latest()->get();
    $benefits = Benefit::where('status', true)->latest()->get();
    $faqs = Faq::where('status', true)->latest()->get();
    $contact = \App\Models\Contact::where('status', true)->latest()->first();
    $recordings = Recording::where('status', true)
    ->latest()
    ->take(3)
    ->get();

    return view('home', compact(
    'galleries',
    'courses',
    'about',
    'upcoming',
    'reviews',
    'benefits',
    'faqs',
    'contact',
    'recordings'
));
});
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');

    Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');

Route::get('/admin/gallery', [AdminGalleryController::class, 'index'])
    ->middleware('auth')
    ->name('admin.gallery');

    Route::get('/admin/gallery/create', [AdminGalleryController::class, 'create'])
    ->middleware('auth')
    ->name('admin.gallery.create');

    Route::post('/admin/gallery', [AdminGalleryController::class, 'store'])
    ->middleware('auth')
    ->name('admin.gallery.store');

    Route::delete('/admin/gallery/{gallery}', [AdminGalleryController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.gallery.destroy');

    Route::get('/admin/gallery/{gallery}/edit', [AdminGalleryController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.gallery.edit');

    Route::put('/admin/gallery/{gallery}', [AdminGalleryController::class, 'update'])
    ->middleware('auth')
    ->name('admin.gallery.update');

    Route::get('/admin/courses', [AdminCourseController::class, 'index'])
    ->middleware('auth')
    ->name('admin.courses');

    Route::get('/admin/courses/create', [AdminCourseController::class, 'create'])
    ->middleware('auth')
    ->name('admin.courses.create');

    Route::post('/admin/courses', [AdminCourseController::class, 'store'])
    ->middleware('auth')
    ->name('admin.courses.store');

    Route::get('/admin/courses/{course}/edit', [AdminCourseController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.courses.edit');

    Route::put('/admin/courses/{course}', [AdminCourseController::class, 'update'])
    ->middleware('auth')
    ->name('admin.courses.update');

    Route::delete('/admin/courses/{course}', [AdminCourseController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.courses.destroy');

    Route::get('/admin/about', [AdminAboutController::class, 'index'])
    ->middleware('auth')
    ->name('admin.about');

Route::get('/admin/about/{about}/edit', [AdminAboutController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.about.edit');

Route::put('/admin/about/{about}', [AdminAboutController::class, 'update'])
    ->middleware('auth')
    ->name('admin.about.update');

    Route::get('/admin/upcoming', [AdminUpcomingController::class, 'index'])
    ->middleware('auth')
    ->name('admin.upcoming');

Route::get('/admin/upcoming/{upcoming}/edit', [AdminUpcomingController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.upcoming.edit');

Route::put('/admin/upcoming/{upcoming}', [AdminUpcomingController::class, 'update'])
    ->middleware('auth')
    ->name('admin.upcoming.update');

    Route::get('/admin/reviews', [AdminReviewController::class, 'index'])
    ->middleware('auth')
    ->name('admin.reviews');

Route::get('/admin/reviews/create', [AdminReviewController::class, 'create'])
    ->middleware('auth')
    ->name('admin.reviews.create');

Route::post('/admin/reviews', [AdminReviewController::class, 'store'])
    ->middleware('auth')
    ->name('admin.reviews.store');

Route::get('/admin/reviews/{review}/edit', [AdminReviewController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.reviews.edit');

Route::put('/admin/reviews/{review}', [AdminReviewController::class, 'update'])
    ->middleware('auth')
    ->name('admin.reviews.update');

Route::delete('/admin/reviews/{review}', [AdminReviewController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.reviews.destroy');

    Route::get('/admin/benefits', [AdminBenefitController::class, 'index'])
    ->middleware('auth')
    ->name('admin.benefits');

Route::get('/admin/benefits/create', [AdminBenefitController::class, 'create'])
    ->middleware('auth')
    ->name('admin.benefits.create');

Route::post('/admin/benefits', [AdminBenefitController::class, 'store'])
    ->middleware('auth')
    ->name('admin.benefits.store');

Route::get('/admin/benefits/{benefit}/edit', [AdminBenefitController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.benefits.edit');

Route::put('/admin/benefits/{benefit}', [AdminBenefitController::class, 'update'])
    ->middleware('auth')
    ->name('admin.benefits.update');

Route::delete('/admin/benefits/{benefit}', [AdminBenefitController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.benefits.destroy');

Route::get('/admin/faqs', [AdminFaqController::class, 'index'])
    ->middleware('auth')
    ->name('admin.faqs');

Route::get('/admin/faqs/create', [AdminFaqController::class, 'create'])
    ->middleware('auth')
    ->name('admin.faqs.create');

Route::post('/admin/faqs', [AdminFaqController::class, 'store'])
    ->middleware('auth')
    ->name('admin.faqs.store');

Route::get('/admin/faqs/{faq}/edit', [AdminFaqController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.faqs.edit');

Route::put('/admin/faqs/{faq}', [AdminFaqController::class, 'update'])
    ->middleware('auth')
    ->name('admin.faqs.update');

Route::delete('/admin/faqs/{faq}', [AdminFaqController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.faqs.destroy');

    Route::get('/admin/contact', [AdminContactController::class, 'index'])
    ->middleware('auth')
    ->name('admin.contact');

Route::put('/admin/contact', [AdminContactController::class, 'update'])
    ->middleware('auth')
    ->name('admin.contact.update');

    Route::get('/gallery', function () {
    $galleries = Gallery::where('status', true)->latest()->get();

    $contact = \App\Models\Contact::where('status', true)->latest()->first();

    return view('gallery', compact('galleries', 'contact'));
})->name('gallery');

Route::get('/admin/recordings', [AdminRecordingController::class, 'index'])
    ->middleware('auth')
    ->name('admin.recordings');

Route::get('/admin/recordings/create', [AdminRecordingController::class, 'create'])
    ->middleware('auth')
    ->name('admin.recordings.create');

Route::post('/admin/recordings', [AdminRecordingController::class, 'store'])
    ->middleware('auth')
    ->name('admin.recordings.store');

Route::get('/admin/recordings/{recording}/edit', [AdminRecordingController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.recordings.edit');

Route::put('/admin/recordings/{recording}', [AdminRecordingController::class, 'update'])
    ->middleware('auth')
    ->name('admin.recordings.update');

Route::delete('/admin/recordings/{recording}', [AdminRecordingController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.recordings.destroy');

    Route::get('/recording-sessions', function () {
    $recordings = \App\Models\Recording::where('status', true)
        ->latest()
        ->get();

    $contact = \App\Models\Contact::where('status', true)
        ->latest()
        ->first();

    return view('recordings', compact('recordings', 'contact'));
})->name('recordings');