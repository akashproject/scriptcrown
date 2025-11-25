<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'administrator'], function () {

    Route::group(['middleware' => ['auth','role:super-admin|admin']], function () {

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

        //Projects
        Route::get('/businesses', [App\Http\Controllers\Administrator\BusinessController::class, 'index'])->name('admin-businesses');
        Route::get('/add-business', [App\Http\Controllers\Administrator\BusinessController::class, 'Add'])->name('admin-add-business');
        Route::get('/view-business/{id}', [App\Http\Controllers\Administrator\BusinessController::class, 'show'])->name('admin-view-business');
        Route::post('/save-business', [App\Http\Controllers\Administrator\BusinessController::class, 'save'])->name('admin-save-business');
        Route::get('/delete-business/{id}', [App\Http\Controllers\Administrator\BusinessController::class, 'delete'])->name('admin-delete-business');

        Route::get('/settings', [App\Http\Controllers\Administrator\SettingController::class, 'show'])->name('admin-settings');
        Route::post('/save-settings', [App\Http\Controllers\Administrator\SettingController::class, 'save'])->name('admin-save-settings');

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
    });
});
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('website');
Route::get('/{slug}', [App\Http\Controllers\PageController::class, 'index'])->where('slug', '([A-Za-z0-9\-]+)')->name('page');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/services/{slug}', [App\Http\Controllers\ServiceController::class, 'view'])->name('service');