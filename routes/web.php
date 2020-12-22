<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\SheduleController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/user/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin'], function(){
	Route::group(['middleware'=>'guest'], function(){
		Route::view('login','admin.login')->name('admin.login');
		Route::post('login',[App\Http\Controllers\AdminController::class,'login'])->name('admin.auth');
	});
	Route::group(['middleware'=>'admin.auth'], function(){
		Route::view('dashboard', [AdminController::class,'admin.home'])->name('admin.home');
		//Event
		Route::match(['get','post'],'event',[EventController::class,'add']);
		Route::match(['get','post'],'event-store',[EventController::class,'store'])->name('eventstore');
		Route::match(['get','post'],'show-event',[EventController::class,'show']);
		Route::match(['get','post'],'edit-event/{id}',[EventController::class,'editEvent']);
		Route::match(['get','post'],'update-event/{id}',[EventController::class,'updateEvent']);
		Route::match(['get','post'],'delete-event/{id}',[EventController::class,'deleteEvent']);

		//Speaker
		Route::match(['get','post'],'add-speaker',[SpeakerController::class,'addspeaker']);
		Route::match(['get','post'],'speaker-store',[SpeakerController::class,'storespeaker']);
		Route::match(['get','post'],'show-speaker',[SpeakerController::class,'showspeaker']);
		Route::match(['get','post'],'edit-speaker/{id}',[SpeakerController::class,'editSpeaker']);
		Route::match(['get','post'],'update-speaker/{id}',[SpeakerController::class,'updateSpeaker']);
		Route::match(['get','post'],'delete-speaker/{id}',[SpeakerController::class,'deleteSpeaker']);

		//Shedule
		Route::match(['get','post'],'shedule',[SheduleController::class,'createShedule']);
		Route::match(['get','post'],'shedule-store',[SheduleController::class,'sheduleStore']);
		Route::match(['get','post'],'shedule-show',[SheduleController::class,'viewShedule']);
		Route::match(['get','post'],'shedule-delete/{id}',[SheduleController::class,'deleteShedule']);
	});
});

Route::get('/',[SpeakerController::class,'index']);

