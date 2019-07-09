<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/', 'HomeController@home')->name('admin.home');
    Route::resource('school_account', 'SchoolAccountController');
    Route::get('school_account/{school_account}/update_status', 'SchoolAccountController@update_status')->name('school_account.update_status');
    Route::resource('package', 'PackageController');
    Route::resource('license', 'LicenseController');
    Route::resource('feature', 'FeatureController');
});