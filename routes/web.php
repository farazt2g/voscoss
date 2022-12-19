<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\websiteController;

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
    return view('test');
});
Route::post('/upload-image',[UploadImageController::class,'upload']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Route::get('/website', function () {
  //  return view('website');
//});

Route::get('/website', 'App\Http\Controllers\websiteController@show');
Route::post('/website', 'App\Http\Controllers\websiteController@save')->name('save');
//Route::post('/website', ['as'=>'Website.store','uses'=>'websiteController@WebsitePost']);