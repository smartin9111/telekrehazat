<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\PropertyController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Frontend\AllPropertyController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [UserController::class, 'Index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');
    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');
    Route::post('/user/password/update', [UserController::class, 'UserPasswordUpdate'])->name('user.password.update');
});

require __DIR__ . '/auth.php';

//Admin group middleware
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

    // Property All Route
    Route::controller(PropertyController::class)->group(function () {
        Route::get('/all/property', 'AllProperty')->name('all.property');
        Route::get('/add/property', 'AddProperty')->name('add.property');
    });
}); // End group admin middleware

//Company group middleware
Route::middleware(['auth', 'role:company'])->group(function () {
    Route::get('/company/dashboard', [CompanyController::class, 'CompanyDashboard'])->name('compnay.dashboard');
}); // End group company middleware
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login')->middleware(RedirectIfAuthenticated::class);



/// Admin Group Middleware
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Property All Route
    Route::controller(PropertyController::class)->group(function () {

        Route::get('/all/property', 'AllProperty')->name('all.property');
        Route::get('/add/property', 'AddProperty')->name('add.property');
        Route::post('/store/property', 'StoreProperty')->name('store.property');
		Route::get('/edit/property/{id}', 'EditProperty')->name('edit.property');
		Route::post('/update/property', 'UpdateProperty')->name('update.property');
		Route::post('/update/property/thambnail', 'UpdatePropertyThambnail')->name('update.property.thambnail');
		Route::post('/update/property/multiimage', 'UpdatePropertyMultiimage')->name('update.property.multiimage');
    	Route::get('/property/multiimg/delete/{id}', 'PropertyMultiImageDelete')->name('property.multiimg.delete');
		Route::post('/store/new/multiimage', 'StoreNewMultiimage')->name('store.new.multiimage');
		Route::get('/delete/property/{id}', 'DeleteProperty')->name('delete.property');
    });
}); // End Group Admin Middleware

Route::get('/property/details/{id}', [IndexController::class, 'PropertyDetails']);
Route::get('/properties', [AllPropertyController::class, 'index'])->name('properties.all');
