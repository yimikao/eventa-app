<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;


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
    return view('welcome', ['events' => Event::paginate(3)]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//VISITOR & USER
Route::get('/events/{event}/register', [App\Http\Controllers\RegistrationController::class, 'store']);
Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('events');
Route::get('/events/{event}', [App\Http\Controllers\EventController::class, 'show']);
Route::get('/allevents/{user}', [App\Http\Controllers\UserController::class, 'show']);

Route::group(['prefix'=>'categories'], function() {
    Route::get('/', function () {
        return view();
    });

    Route::get('/tech', function () {
        $tech_events = Event::where('category', 'tech');
        return view('', []);
    });
});



//USER
Route::group(['middleware' => 'auth', 'prefix'=>'dashboard'], function() {
    
    Route::get('/events/create', [App\Http\Controllers\EventController::class, 'create']);
    Route::post('/events/store', [App\Http\Controllers\EventController::class, 'store']);
    Route::get('/events/{event}/edit', [App\Http\Controllers\EventController::class, 'edit']);
    Route::post('/events/{event}/', [App\Http\Controllers\EventController::class, 'update']);
    Route::delete('/events/{event}', [App\Http\Controllers\EventController::class, 'destroy']);

    Route::get('/registrations', [App\Http\Controllers\UserController::class, 'showRegistrations']);
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'show']);
    Route::get('/settings', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('/settings', [App\Http\Controllers\UserController::class, 'update']);

});

