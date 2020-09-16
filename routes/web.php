<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('company/login', 'Auth\LoginController@showCompanyLoginForm')->name('company.login');
Route::post('company/login', 'Auth\LoginController@companyLogin');

Route::get('company/register', 'Auth\RegisterController@showCompanyRegistrationForm')->name('company.register');
Route::post('company/register', 'Auth\RegisterController@companyRegistration');


Route::middleware('auth')->prefix('home')->name('home.')->group(function () {
    Route::get('/', 'HomeController@index');
    Route::get('edit', 'UserController@edit')->name('edit');
    Route::post('update', 'UserController@update')->name('update');
    Route::prefix('jobs')->name('jobs.')->group(function () {
        Route::get('apply/{id}', 'HomeController@apply')->name('apply');
        Route::get('cancel/{id}', 'HomeController@cancelApply')->name('cancel');
    });
});


Route::middleware('auth:company')->prefix('company')->name('company.')->group(function () {
    Route::get('/', 'CompanyController@index')->name('index');
    Route::get('accept/{jobid}/{userid}', 'CompanyController@accept')->name('accept');
    Route::get('reject/{jobid}/{userid}', 'CompanyController@reject')->name('reject');

    Route::prefix('jobs')->name('jobs.')->group(function () {
        Route::get('index', 'JobController@index')->name('index');
        Route::get('create', 'JobController@create')->name('create');
        Route::post('store', 'JobController@store')->name('store');
        Route::get('edit/{id}', 'JobController@edit')->name('edit');
        Route::put('edit/{id}', 'JobController@update')->name('update');
        Route::delete('delete/{id}', 'JobController@destroy')->name('delete');
    });
});
