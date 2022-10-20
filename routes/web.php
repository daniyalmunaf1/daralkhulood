<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Contributor\ContributorController;
use App\Http\Controllers\Student\StudentController;

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

Route::get('/', App\Http\Controllers\Admin\UsersController::class, 'index')->name('index');
Route::get('/dashboard', [App\Http\Controllers\Admin\UsersController::class, 'dashboard'])->middleware(['auth','verified'])->name('dashboard');
Route::post('/subscribe', [App\Http\Controllers\Admin\UsersController::class, 'subscribe'])->middleware(['auth','verified'])->name('subscribe');
Route::get('/subscriptions', [App\Http\Controllers\Admin\UsersController::class, 'subscriptions'])->middleware(['auth','verified'])->name('subscriptions');

Route::get('/teamlist', [App\Http\Controllers\Admin\UsersController::class, 'teamlist'])->middleware(['auth','verified'])->name('teamlist');
Route::get('/edit-{id}', [App\Http\Controllers\Admin\UsersController::class, 'edit'])->middleware(['auth','verified'])->name('edit');
Route::post('/updateEmployee', [App\Http\Controllers\Admin\UsersController::class, 'updateEmployee'])->middleware(['auth','verified'])->name('updateEmployee');
Route::get('/add-employee', [App\Http\Controllers\Admin\UsersController::class, 'addemployee'])->middleware(['auth','verified'])->name('add-employee');
Route::post('/storeemployee', [App\Http\Controllers\Admin\UsersController::class, 'storeemployee'])->middleware(['auth','verified'])->name('storeemployee');
Route::DELETE('/delete-{employee}', [App\Http\Controllers\Admin\UsersController::class, 'destroy'])->middleware(['auth','verified'])->name('delete');

Route::get('/services', [App\Http\Controllers\Admin\UsersController::class, 'services'])->middleware(['auth','verified'])->name('services');
Route::get('/editservice-{id}', [App\Http\Controllers\Admin\UsersController::class, 'editservice'])->middleware(['auth','verified'])->name('editservice');
Route::post('/updateservice', [App\Http\Controllers\Admin\UsersController::class, 'updateservice'])->middleware(['auth','verified'])->name('updateservice');
Route::get('/add-service', [App\Http\Controllers\Admin\UsersController::class, 'addservice'])->middleware(['auth','verified'])->name('add-service');
Route::post('/storeservice', [App\Http\Controllers\Admin\UsersController::class, 'storeservice'])->middleware(['auth','verified'])->name('storeservice');
Route::post('/delete-service-{service}', [App\Http\Controllers\Admin\UsersController::class, 'destroyservice'])->middleware(['auth','verified'])->name('delete-service');

Route::get('/images', [App\Http\Controllers\Admin\UsersController::class, 'images'])->middleware(['auth','verified'])->name('images');
Route::get('/add-image', [App\Http\Controllers\Admin\UsersController::class, 'addimage'])->middleware(['auth','verified'])->name('add-image');
Route::post('/storeimage', [App\Http\Controllers\Admin\UsersController::class, 'storeimage'])->middleware(['auth','verified'])->name('storeimage');
Route::post('/delete-image-{image}', [App\Http\Controllers\Admin\UsersController::class, 'destroyimage'])->middleware(['auth','verified'])->name('delete-image');

Route::get('/videos', [App\Http\Controllers\Admin\UsersController::class, 'videos'])->middleware(['auth','verified'])->name('videos');
Route::get('/add-video', [App\Http\Controllers\Admin\UsersController::class, 'addvideo'])->middleware(['auth','verified'])->name('add-video');
Route::post('/storevideo', [App\Http\Controllers\Admin\UsersController::class, 'storevideo'])->middleware(['auth','verified'])->name('storevideo');
Route::post('/delete-video-{video}', [App\Http\Controllers\Admin\UsersController::class, 'destroyvideo'])->middleware(['auth','verified'])->name('delete-video');

Route::get('/equipments', [App\Http\Controllers\Admin\UsersController::class, 'equipments'])->middleware(['auth','verified'])->name('equipments');
Route::get('/editequipment-{id}', [App\Http\Controllers\Admin\UsersController::class, 'editequipment'])->middleware(['auth','verified'])->name('editequipment');
Route::post('/updateequipment', [App\Http\Controllers\Admin\UsersController::class, 'updateequipment'])->middleware(['auth','verified'])->name('updateequipment');
Route::get('/add-equipment', [App\Http\Controllers\Admin\UsersController::class, 'addequipment'])->middleware(['auth','verified'])->name('add-equipment');
Route::post('/storeequipment', [App\Http\Controllers\Admin\UsersController::class, 'storeequipment'])->middleware(['auth','verified'])->name('storeequipment');
Route::post('/delete-equipment-{equipment}', [App\Http\Controllers\Admin\UsersController::class, 'destroyequipment'])->middleware(['auth','verified'])->name('delete-equipment');

Route::get('/our-equipments', [App\Http\Controllers\Admin\UsersController::class, 'ourequipments'])->name('our-equipments');
Route::get('/gallery', [App\Http\Controllers\Admin\UsersController::class, 'gallery'])->name('gallery');
Route::get('/aboutus', [App\Http\Controllers\Admin\UsersController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [App\Http\Controllers\Admin\UsersController::class, 'contactus'])->name('contactus');
Route::post('/sendmessage', [App\Http\Controllers\Admin\UsersController::class, 'sendmessage'])->name('sendmessage');
Route::get('/team', [App\Http\Controllers\Admin\UsersController::class, 'team'])->name('team');
Route::post('/update', [App\Http\Controllers\Admin\UsersController::class, 'update'])->middleware(['auth','verified'])->name('update');


Route::post('user/change', [App\Http\Controllers\Admin\UsersController::class, 'changePassword'])->middleware(['auth','verified'])->name('change_password');
Route::get('user/change-password',[App\Http\Controllers\Admin\UsersController::class, 'gotochangepassword'])->middleware(['auth','verified'])->name('gotochangepassword');

Route::get('user/mig', function () {
    Artisan::call("migrate");
});
Route::get('user/dbsd', function () {
    Artisan::call("db:seed");
});
Route::get('user/dbwp', function () {
    Artisan::call("db:wipe");
});

Route::get('/cc', function () {
    Artisan::call("cache:clear");
});


require __DIR__.'/auth.php';
