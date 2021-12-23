<?php

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


Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/health', [HomeController::class, 'index'])->name('health.index');
Route::get('/health/about', [HomeController::class, 'about'])->name('health.about');
Route::get('/health/doctors', [HomeController::class, 'doctorIndex'])->name('health.doctors');
Route::get('/health/blogs', [HomeController::class, 'blogIndex'])->name('health.blogs');
Route::get('/health/items', [HomeController::class, 'itemIndex'])->name('heath.itemIndex');

Route::get('/health/blog-details/{id}', [HomeController::class, 'blogDetail'])->name('health.blog-details');

Route::get('/health/contact', [HomeController::class, 'contact'])->name('health.contact');

Route::get('/admin/items/delete/{id}', [ItemController::class, 'delete'])->name('items.delete');
Route::resource('/admin/items', ItemController::class);

Route::prefix('admin')->group(function () {
    Route::view('/', 'admin.dashboard_one')->name('admin.index');
    Route::view('/dashboard-one', 'admin.dashboard_one')->name('admin.dashboard_one');
    Route::view('/dashboard-two', 'admin.dashboard_two')->name('admin.dashboard_two');
    Route::view('/dashboard-three', 'admin.dashboard_three')->name('admin.dashboard_three');
    Route::view('/widgets', 'admin.widgets')->name('admin.widgets');
});

Route::resource('/admin/doctors', DoctorController::class);

Route::resource('/admin/blogs', BlogController::class);


Route::get('/erm', [ERMController::class, 'display']);


Route::get('/test', [TestController::class, 'index'])->name('users.index');;
