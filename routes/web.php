<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ERMController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TestController;
use App\Models\Blog;
use App\Models\Doctor;
use App\Models\Field;
use App\Models\Item;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Auth::routes();




Route::get('/welcome', function () {
    return view('welcome');
});


// FrontView Module
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('health')->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('health.index');
    Route::get('/about', [HomeController::class, 'about'])->name('health.about');
    Route::get('/doctors', [HomeController::class, 'doctorIndex'])->name('health.doctors');
    Route::get('/blogs', [HomeController::class, 'blogIndex'])->name('health.blogs');
    Route::get('/items', [HomeController::class, 'itemIndex'])->name('heath.itemIndex');
    Route::get('/blogsByCategory/{categoryId}', [HomeController::class, 'blogsByCategory'])->name('health.blogsByCategory');
    Route::get('/blog-details/{id}', [HomeController::class, 'blogDetail'])->name('health.blog-details');
    Route::get('/contact', [HomeController::class, 'contact'])->name('health.contact');
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::view('/', 'admin.dashboard_one')->name('admin.index');
    Route::view('/dashboard-one', 'admin.dashboard_one')->name('admin.dashboard_one');
    Route::view('/dashboard-two', 'admin.dashboard_two')->name('admin.dashboard_two');
    Route::view('/dashboard-three', 'admin.dashboard_three')->name('admin.dashboard_three');
    Route::view('/widgets', 'admin.widgets')->name('admin.widgets');

    // Doctors Module 
    Route::resource('/doctors', DoctorController::class);
    Route::post('/doctors/search', [DoctorController::class, 'search'])->name('doctors.search');

    // Items Module 
    Route::get('/items/delete/{id}', [ItemController::class, 'delete'])->name('items.delete')->middleware('auth');
    Route::resource('/items', ItemController::class)->middleware('auth');

    //Blogs Module
    Route::resource('/blogs', BlogController::class)->middleware('auth');
});


Route::get('/erm', [ERMController::class, 'display']);

Route::get('/test', [TestController::class, 'index'])->name('users.index');

Route::get('/admin/login', [LoginController::class, 'showLoginForm']);
