<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FirstController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\NewsController;


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

Route::get('/test', function () {
    return 'welcome';
})->middleware('auth');

Route::namespace('Front')->group(function(){
    // Route::get('\users', 'FirstController@showAdminName');

    Route::prefix('uu')->group(function(){
        Route::get('/users',[FirstController::class,'showAdminName']);
    });

});

// Route::prefix('uu')->group(function(){
//     // Route::get('\users', 'FirstController@showAdminName');
//     Route::get('/test02',[TestController::class,'showAdminName']);
//     Route::get('/name',[TestController::class,'showAdminName']);
// });

Route::group(['prefix' => 'uu'] ,function(){
    // Route::get('\users', 'FirstController@showAdminName');
    Route::get('/test02',[TestController::class,'showAdminName']);
    Route::get('/name',[TestController::class,'showAdminName']);
    Route::get('/',[TestController::class,'showAdminName']);
    Route::get('/01',[TestController::class,'showAdminName01']);
});

Route::resource('news', NewsController::class)->except(['index']);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
