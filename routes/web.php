<?php

namespace App;

use App\Http\Controllers\CasesController;
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
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/diagnosis', function(){
    return view('diagnosis');
});

Route::get('/jit', function(){
    return view('jit');
});

Route::get('/geolocation', function(){
    return view('geolocation');
});

Route::get('/sim', function(){
    return view('sim_case');
});

Route::get('/omni', function(){
    return view('omni');
});


//  Auto Routing for all resource specific views
Route::resource('cases', CasesController::class);
Route::get("/cases/{case_id}", [CasesController::class, 'show']);
