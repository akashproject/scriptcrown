<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('aa/migrate-fresh', function() {
    Artisan::call('migrate:fresh');
    $output = Artisan::output();
    dd($output);
});

Route::get('aa/migrate', function() {
    Artisan::call('migrate');
    $output = Artisan::output();
    dd($output);
});

Route::get('/aa/migrate-seed', function() {
    Artisan::call('migrate', ['--seed' => true]);
    $output = Artisan::output();
    dd($output);
});

Route::get('/aa/migrate-rollback', function() {
    Artisan::call('migrate:rollback', ['--step' => "1"]);
    $output = Artisan::output();
    dd($output);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'administrator'], function () {

    Route::group(['middleware' => ['auth','role:super-admin|admin']], function () {

        //Artisan Commands
        Route::get('/clear-cache', function() {
            $exitCode = Artisan::call('cache:clear');
            return 'Cache Cleared'; 
        }); 

        Route::get('/', [App\Http\Controllers\Administrator\IndexController::class, 'dashboard'])->name('admin-dashboard');

        //Category
        Route::get('/category', [App\Http\Controllers\Administrator\CategoryController::class, 'index'])->name('admin-category');
        Route::get('/add-category', [App\Http\Controllers\Administrator\CategoryController::class, 'Add'])->name('admin-add-category');
        Route::get('/view-category/{id}', [App\Http\Controllers\Administrator\CategoryController::class, 'show'])->name('admin-show-category');
        Route::post('/save-category', [App\Http\Controllers\Administrator\CategoryController::class, 'save'])->name('admin-save-category');
        Route::get('/delete-category/{id}', [App\Http\Controllers\Administrator\CategoryController::class, 'delete'])->name('admin-delete-category');
        
        //Services
        Route::get('/services', [App\Http\Controllers\Administrator\ServiceController::class, 'index'])->name('admin-services');
        Route::get('/add-service', [App\Http\Controllers\Administrator\ServiceController::class, 'add'])->name('admin-add-service');
        Route::get('/view-service/{id}', [App\Http\Controllers\Administrator\ServiceController::class, 'show'])->name('admin-show-service');
        Route::post('/save-service', [App\Http\Controllers\Administrator\ServiceController::class, 'save'])->name('admin-save-service');
        Route::get('/delete-service/{id}', [App\Http\Controllers\Administrator\ServiceController::class, 'delete'])->name('admin-delete-service');

        //Projects
        Route::get('/projects', [App\Http\Controllers\Administrator\ProjectController::class, 'index'])->name('admin-projects');
        Route::get('/add-project', [App\Http\Controllers\Administrator\ProjectController::class, 'Add'])->name('admin-add-project');
        Route::get('/view-project/{id}', [App\Http\Controllers\Administrator\ProjectController::class, 'show'])->name('admin-view-project');
        Route::post('/save-project', [App\Http\Controllers\Administrator\ProjectController::class, 'save'])->name('admin-save-project');
        Route::get('/delete-project/{id}', [App\Http\Controllers\Administrator\ProjectController::class, 'delete'])->name('admin-delete-project');

        //Businesses
        Route::get('/businesses', [App\Http\Controllers\Administrator\BusinessController::class, 'index'])->name('admin-businesses');
        Route::get('/add-business', [App\Http\Controllers\Administrator\BusinessController::class, 'Add'])->name('admin-add-business');
        Route::get('/view-business/{id}', [App\Http\Controllers\Administrator\BusinessController::class, 'show'])->name('admin-view-business');
        Route::post('/save-business', [App\Http\Controllers\Administrator\BusinessController::class, 'save'])->name('admin-save-business');
        Route::get('/delete-business/{id}', [App\Http\Controllers\Administrator\BusinessController::class, 'delete'])->name('admin-delete-business');

        //Technologies
        Route::get('/technologies', [App\Http\Controllers\Administrator\TechnologyController::class, 'index'])->name('admin-technologies');
        Route::get('/add-technology', [App\Http\Controllers\Administrator\TechnologyController::class, 'Add'])->name('admin-add-technology');
        Route::get('/view-technology/{id}', [App\Http\Controllers\Administrator\TechnologyController::class, 'show'])->name('admin-view-technology');
        Route::post('/save-technology', [App\Http\Controllers\Administrator\TechnologyController::class, 'save'])->name('admin-save-technology');
        Route::get('/delete-technology/{id}', [App\Http\Controllers\Administrator\TechnologyController::class, 'delete'])->name('admin-delete-technology');

        //Technology Type
        Route::get('/tech-types', [App\Http\Controllers\Administrator\TechTypeController::class, 'index'])->name('admin-tech-types');
        Route::get('/add-tech-type', [App\Http\Controllers\Administrator\TechTypeController::class, 'Add'])->name('admin-add-tech-type');
        Route::get('/show-tech-type/{id}', [App\Http\Controllers\Administrator\TechTypeController::class, 'show'])->name('admin-show-tech-type');
        Route::post('/save-tech-type', [App\Http\Controllers\Administrator\TechTypeController::class, 'save'])->name('admin-save-tech-type');
        Route::get('/delete-tech-type/{id}', [App\Http\Controllers\Administrator\TechTypeController::class, 'delete'])->name('admin-delete-tech-type');

        //Faqs
        Route::get('/faqs', [App\Http\Controllers\Administrator\FaqController::class, 'index'])->name('admin-faqs');
        Route::get('/add-faq', [App\Http\Controllers\Administrator\FaqController::class, 'add'])->name('admin-add-faq');
        Route::get('/view-faq/{id}', [App\Http\Controllers\Administrator\FaqController::class, 'show'])->name('admin-show-faq');
        Route::post('/save-faq', [App\Http\Controllers\Administrator\FaqController::class, 'save'])->name('admin-save-faq');
        Route::get('/delete-faq/{id}', [App\Http\Controllers\Administrator\FaqController::class, 'delete'])->name('admin-delete-faq');

        //Page
        Route::get('/pages', [App\Http\Controllers\Administrator\PageController::class, 'index'])->name('admin-pages');
        Route::get('/add-page', [App\Http\Controllers\Administrator\PageController::class, 'Add'])->name('admin-add-page');
        Route::get('/view-page/{id}', [App\Http\Controllers\Administrator\PageController::class, 'show'])->name('admin-view-page');
        Route::post('/save-page', [App\Http\Controllers\Administrator\PageController::class, 'save'])->name('admin-save-page');
        Route::get('/delete-page/{id}', [App\Http\Controllers\Administrator\PageController::class, 'delete'])->name('admin-delete-page');

        //Ad Page
        Route::get('/ad-pages', [App\Http\Controllers\Administrator\AdPageController::class, 'index'])->name('admin-ad-pages');
        Route::get('/add-ad-page', [App\Http\Controllers\Administrator\AdPageController::class, 'Add'])->name('admin-add-ad-page');
        Route::get('/view-ad-page/{id}', [App\Http\Controllers\Administrator\AdPageController::class, 'show'])->name('admin-ad-view-page');
        Route::post('/save-ad-page', [App\Http\Controllers\Administrator\AdPageController::class, 'save'])->name('admin-sad-ave-page');
        Route::get('/delete-ad-page/{id}', [App\Http\Controllers\Administrator\AdPageController::class, 'delete'])->name('admin-ad-delete-page');

        // Media Module
        Route::get('/media', [App\Http\Controllers\Administrator\MediaController::class, 'index'])->name('admin-media');
        Route::get('/view-file/{id}', [App\Http\Controllers\Administrator\MediaController::class, 'view'])->name('admin-view-file');
        Route::post('/upload', [App\Http\Controllers\Administrator\MediaController::class, 'save'])->name('admin-save-media');
        Route::post('/save-file', [App\Http\Controllers\Administrator\MediaController::class, 'updateFile'])->name('admin-save-file');
        Route::get('/delete-file/{id}', [App\Http\Controllers\Administrator\MediaController::class, 'delete'])->name('admin-delete-file');
        Route::post('/search-media', [App\Http\Controllers\Administrator\MediaController::class, 'search'])->name('admin-search-media');

        //Clients
        Route::get('/clients', [App\Http\Controllers\Administrator\ClientController::class, 'index'])->name('admin-clients');
        Route::get('/add-client', [App\Http\Controllers\Administrator\ClientController::class, 'Add'])->name('admin-add-client');
        Route::get('/view-client/{id}', [App\Http\Controllers\Administrator\ClientController::class, 'show'])->name('admin-show-client');
        Route::post('/save-client', [App\Http\Controllers\Administrator\ClientController::class, 'save'])->name('admin-save-client');
        Route::get('/delete-client/{id}', [App\Http\Controllers\Administrator\ClientController::class, 'delete'])->name('admin-delete-client');

        //Testimonials
        Route::get('/testimonials', [App\Http\Controllers\Administrator\TestimonialController::class, 'index'])->name('admin-testimonials');
        Route::get('/add-testimonial', [App\Http\Controllers\Administrator\TestimonialController::class, 'Add'])->name('admin-add-testimonial');
        Route::get('/view-testimonial/{id}', [App\Http\Controllers\Administrator\TestimonialController::class, 'show'])->name('admin-show-testimonial');
        Route::post('/save-testimonial', [App\Http\Controllers\Administrator\TestimonialController::class, 'save'])->name('admin-save-testimonial');
        Route::get('/delete-testimonial/{id}', [App\Http\Controllers\Administrator\TestimonialController::class, 'delete'])->name('admin-delete-testimonial');

        Route::get('/settings', [App\Http\Controllers\Administrator\SettingController::class, 'show'])->name('admin-settings');
        Route::post('/save-settings', [App\Http\Controllers\Administrator\SettingController::class, 'save'])->name('admin-save-settings');
    });
});
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('website');
Route::get('/{slug}', [App\Http\Controllers\PageController::class, 'index'])->where('slug', '([A-Za-z0-9\-]+)')->name('page');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category/{slug}', [App\Http\Controllers\ServiceController::class, 'view'])->name('category');
Route::get('/services/{slug}', [App\Http\Controllers\ServiceController::class, 'view'])->name('services');
Route::get('/projects/{slug}', [App\Http\Controllers\ProjectController::class, 'view'])->name('projects');
Route::get('/technologies/{slug}', [App\Http\Controllers\TechnologyController::class, 'view'])->name('technologies');
Route::get('/business/{slug}', [App\Http\Controllers\TechnologyController::class, 'view'])->name('business');