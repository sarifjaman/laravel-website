<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\home\HomeSliderController;
use App\Http\Controllers\Home\PortfolioController;
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
    Route::get('/all/multi/image', 'allmultiimage')->name('all.multi.image');
    Route::get('/edit/multi/image/{id}', 'editmultiimage')->name('edit.multi.image');
    Route::post('/update/multi/image', 'updatemultiimage')->name('update.multi.image');
    Route::get('/delete/multi/image/{id}', 'deletemultiimage')->name('delete.multi.image');
});

//Portfolio
Route::controller(PortfolioController::class)->group(function () {
    Route::get('/all/portfolio', 'allportfolio')->name('all.portfolio');
    Route::get('/add/portfolio', 'addportfolio')->name('add.portfolio');
    Route::post('/store/portfolio', 'storeportfolio')->name('store.portfolio');
    Route::get('/edit/portfolio/{id}', 'editprortfolio')->name('edit.prortfolio');
    Route::post('/update/portfolio', 'updateportfolio')->name('update.portfolio');
    Route::get('/delete/portfolio/{id}', 'deleteportfolio')->name('delete.portfolio');
    Route::get('/portfolio/detail/{id}', 'portfoliodetail')->name('portfolio.detail');
});

// Route::get('/', [Frontend::class, 'multiimageshow'])->name('multi.image.show');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
