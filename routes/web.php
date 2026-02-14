<?php

use Illuminate\Support\Facades\Route;
// Frontend
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\LandownerController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\PropertyDetailsController;

// Dashboard
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HeroSliderController;
use App\Http\Controllers\Admin\OthersPageHeroController;
use App\Http\Controllers\ScrollingEffectComponentController;
use App\Http\Controllers\Admin\ScrollingTextController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyMediaController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\ExploreSliderController;
use App\Http\Controllers\Admin\MeetingSectionController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\OfficeContactController;
use App\Http\Controllers\Admin\ChairmanController;
use App\Http\Controllers\Admin\CareerAdminController;
use App\Http\Controllers\Admin\ContactAdminController;





// Auth
use App\Http\Controllers\AuthController;

    // Fontend
    Route::get('/', [HomeController::class, 'index'])->name('home');

    //About Route
    Route::get('/our-team', [AboutController::class, 'ourTeam'])->name('our-team');
    Route::get('/privacy-policy', [AboutController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('/chairmans-message', [AboutController::class, 'chairmansMessage'])->name('chairmans-message');

    Route::get('/career', [CareerController::class, 'career'])->name('career');
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/landowner', [LandownerController::class, 'landowner'])->name('landowner');

    //Blog
    Route::get('/blog', [BlogController::class, 'blog'])->name('blog');

    // Property
    Route::get('/property/{property}', [PropertyDetailsController::class, 'show'])->name('property.show');


    // Auth
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



//  Dashboard
    Route::middleware('auth')->group(function(){

    Route::get('/dashboard', [AdminController::class, 'admin'])->name('dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');



//  home slider backend
    Route::get('/hero-slider-index', [HeroSliderController::class, 'index'])->name('slider-index');
    Route::post('/hero-slider-index', [HeroSliderController::class, 'store'])->name('slider.store');
    Route::get('admin/hero-sliders/{id}/edit', [HeroSliderController::class, 'edit'])->name('admin.hero-sliders.edit');
    Route::put('admin/hero-sliders/{id}', [HeroSliderController::class, 'update'])->name('admin.hero-sliders.update');
    Route::delete('admin/hero-sliders/{id}', [HeroSliderController::class, 'destroy'])->name('admin.hero-sliders.delete');
    Route::post('admin/hero-sliders/{id}/toggle-status', [HeroSliderController::class, 'toggleStatus'])->name('admin.hero-sliders.toggle');


    //Others page Hero
    Route::resource('others-page-hero', OthersPageHeroController::class);
    Route::patch('admin/others-page-hero/{hero}/toggle-status', [OthersPageHeroController::class, 'toggleStatus'])->name('admin.others-page-hero.toggle-status');

    // Scrolling section
    Route::resource('scrolling', ScrollingEffectComponentController::class);

    //Marquee text or ticker
    Route::resource('scrolling-text', ScrollingTextController::class);
    Route::post('scrolling-text/status/{id}', [ScrollingTextController::class, 'toggleStatus']);

    //Team
    Route::resource('teams', TeamController::class);
    //status update toggle
    Route::post('/teams/toggle-status', [TeamController::class, 'toggleStatus'])->name('teams.toggle.status');
    Route::resource('chairman', ChairmanController::class);


    //Testimonial
    Route::resource('testimonials', TestimonialController::class);
    Route::post('/testimonials/{id}/status', [TestimonialController::class, 'updateStatus'])->name('testimonials.status');

    //Property controller
    Route::resource('properties', PropertyController::class);
    //Property image/media delete
    Route::get('/properties/{property}/media', [PropertyMediaController::class, 'editMedia'])->name('properties.media.edit');
    Route::delete('/property-image/{media}', [PropertyMediaController::class, 'destroy'])->name('property.image.delete');
    Route::resource('locations', LocationController::class);
    Route::resource('categories', CategoryController::class);

    //Explore slider
    Route::resource('explore-sliders', ExploreSliderController::class);

    // Site settings
    Route::get('/site-settings', [SiteSettingController::class, 'edit'])->name('site.settings.edit');
    Route::post('/site-settings', [SiteSettingController::class, 'update'])->name('site.settings.update');
    // Metting section
    Route::resource('meeting-sections', MeetingSectionController::class);
    // Office Contact
    Route::resource('office-contact', OfficeContactController::class);
    Route::post('/office-contact/status-update', [OfficeContactController::class, 'statusUpdate'])->name('office-contact.status.update'); 

    // Career
    Route::resource('career-admin', CareerAdminController::class);


    // Contact
    Route::resource('mails', ContactAdminController::class);

    Route::get('mails-trash', [ContactAdminController::class, 'trash'])->name('mails.trash');
    Route::get('mails-restore/{id}', [ContactAdminController::class, 'restore'])->name('mails.restore');
    Route::delete('mails-force-delete/{id}', [ContactAdminController::class, 'forceDelete'])->name('mails.forceDelete');

    Route::post('contact-admin/bulk-delete', [ContactAdminController::class, 'bulkDelete'])->name('mails.bulkDelete');


    // View single trashed item
    Route::get('mail/trash/{id}', [ContactAdminController::class, 'showTrash'])->name('mails.trash.show');

    

    



    });//dashbord
