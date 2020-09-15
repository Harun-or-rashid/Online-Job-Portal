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
    return view('backend.category.update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', function () {
    return view('backend.index');
})->name('admin');
Route::get('t', function () {
    return view('backend.admin.create');
});
// Route::get('/show','AdminController@ss')->name('login');
// Route::post('/login','AdminController@login');
// Route::get('/out','AdminController@logout')->name('out');

/*
 * Categories Route*/
// Route::prefix('categories')->name('category.')->group(function () {
//     Route::get('/', 'CategoryController@index')->name('index')->middleware('auth');
//     Route::get('/create', 'CategoryController@create')->name('create')->middleware('auth');
//     Route::post('/store', 'CategoryController@store')->name('store')->middleware('auth');
//     Route::get('/edit/{edit}', 'CategoryController@edit')->name('edit')->middleware('auth');
//     Route::post('/update/{edit}', 'CategoryController@update')->name('update')->middleware('auth');
//     Route::get('/delete/{category}', 'CategoryController@destroy')->name('delete')->middleware('auth');
// });
