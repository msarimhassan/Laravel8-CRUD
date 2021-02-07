<?php

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
Route::get('/viewproduct','App\Http\Controllers\ProductController@viewallrecords')->name('viewproduct');
Route::get('/addRecord','App\Http\Controllers\ProductController@addRecord');
Route::post('/insertRecord','App\Http\Controllers\ProductController@insertRecord');
Route::get('/deleteRecord','App\Http\Controllers\ProductController@deleteRecord');
Route::get('/editRecord','App\Http\Controllers\ProductController@editRecord');
Route::post('/updateRecord','App\Http\Controllers\ProductController@updateRecord');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

