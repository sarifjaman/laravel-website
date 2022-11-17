<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\home\HomeSliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

//Admin All Route
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'profile')->name('admin.profile');
    Route::get('/admin/edit/profile', 'editprofile')->name('admin.editprofile');
    Route::post('/admin/store/profile', 'storeprofile')->name('store.profile');

    //Change Password
    Route::get('/change/password', 'changepassword')->name('change.password');
    Route::post('/update/password', 'updatepassword')->name('update.password');
});

//Home Slider
Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/home/slide', 'homeslide')->name('home.slide');
    Route::post('/update/slider', 'updateslider')->name('update.slider');
});

//About
Route::controller(AboutController::class)->group(function () {
    Route::get('/about/page', 'aboutpage')->name('about.page');
    Route::post('/update/about', 'updateabout')->name('update.about');
    Route::get('/about', 'homeabout')->name('home.about');
    Route::get('/about/multi/image', 'aboutmulti')->name('about.multi.image');
    Route::post('store/multi/image', 'storemultiimage')->name('store.multi.image');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
