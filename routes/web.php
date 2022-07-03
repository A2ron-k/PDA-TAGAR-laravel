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

Route::get('/predicted', function(){
    return view('predicted');
});

Route::get('/case_specific', function(){
    return view('case_specific');
});

Route::get('/geolocation', function(){
    return view('geolocation');
});

//  Auto Routing for all resource specific views
Route::resource('cases', CasesController::class);
Route::get("/cases/{case_id}", [CasesController::class, 'show']);
