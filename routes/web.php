<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ContactController;

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



Route::get('/', [myController::class, 'index'])->name('index');

Route::get('/service', [myController::class,'service'])->name('service');


Route::get('/about', [myController::class,'about'])->name('about');

Route::get('/carbooking', [myController::class,'carbooking'])->name('carbooking');
Route::get('/hotel', [myController::class,'hotel'])->name('hotel');

Route::get('/tours', [myController::class,'tours'])->name('tours');

Route::get('/contact', [myController::class,'contact'])->name('contact');
Route::get('/airticket', [myController::class,'airticket'])->name('airticket');
Route::get('/toursnotavailable', [myController::class,'toursnotavailable'])->name('toursnotavailable');

Route::get('/notavailable', [myController::class,'notavailable'])->name('notavailable');
Route::any('/contact/store', [ContactController::class, 'store'])->name('store');


Route::get('/tours/gilgit', [TourController::class,'gilgit'])->name('tours.gilgit');


Route::get('/gilgit/byAir', [TourController::class,'gilgitbyair'])->name('gilgit.byAir');

Route::get('/gilgit/byroad', [TourController::class,'gilgitbyroad'])->name('gilgit.byroad');
Route::get('/gilgit/grouptour', [TourController::class,'grouptour'])->name('gilgit.grouptour');



Route::get('/swat/swattour', [TourController::class,'swattour'])->name('tours.swat');

Route::get('/chitraltour', [TourController::class,'chitraltour'])->name('tours.chitral');

Route::get('/naran', [TourController::class,'narantour'])->name('tours.naran');

Route::get('/nathia', [TourController::class,'nathiatour'])->name('tours.nathia');

Route::get('/kashmir', [TourController::class,'kashmirtour'])->name('tours.kashmir');

Route::get('/skardu', [TourController::class,'skardutour'])->name('tours.skardu');
Route::get('/kumrat', [TourController::class,'kumrattour'])->name('tours.kumrat');

Route::get('/skardu/byAir', [TourController::class,'skardubyair'])->name('skardu.skardubyAir');

Route::get('/skardu/byroad', [TourController::class,'skardubyroad'])->name('skardu.skardubyroad');




// cars

Route::get('/cars/grandcabin', [CarsController::class,'grandcabin'])->name('cars.grandcabin');
Route::get('/coaster', [CarsController::class,'coaster'])->name('cars.coaster');
Route::get('/landcruiser', [CarsController::class,'landcruiser'])->name('cars.landcruiser');
Route::get('/brv', [CarsController::class,'brv'])->name('cars.brv');
Route::get('/corolla', [CarsController::class,'corolla'])->name('cars.corolla');
Route::get('/civic', [CarsController::class,'civic'])->name('cars.civic');


// Route::get('/civic', [YourController::class, 'civic'])->name('civic');


//hotels

Route::get('/hotel/skardu', [myController::class,'skarduhotel'])->name('hotels.skarduhotel');

Route::get('/hotel/hunza', [myController::class,'hunzahotel'])->name('hotels.hunzahotel');

Route::get('/hotel/chitral', [myController::class,'chitralhotel'])->name('hotels.chitralhotel');

Route::get('/hotel/gilgit', [myController::class,'gilgithotel'])->name('hotels.gilgithotel');