<?php

use App\Http\Controllers\Admin\DashboardController;
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

// Route::get('/', function () {
//     return view('dashboard');
// });


// Admin
Route::group(['prefix' => '/admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['web']], function () {

    Route::get('/', 'DashboardController@index')->name('dashboards');

    Route::group(['prefix' => '/account_admin'], function () {

        Route::get('/', 'AkunController@index')->name('akun');
        Route::get('/data', 'AkunController@data')->name('account_admin.tambah');
        Route::post('/store', 'AkunController@store')->name('account_admin.store');
        Route::get('/show/{id}', 'AkunController@show')->name('account_admin.show');
        Route::post('/update', 'AkunController@update')->name('account_admin.update');
        Route::delete('delete/{id}', 'AkunController@destroy')->name('account_admin.delete');

    });

    Route::group(['prefix' => '/account_petugas'], function () {

        Route::get('/', 'PetugasController@index')->name('petugas');
        Route::get('/data', 'PetugasController@data')->name('account_petugas.tambah');
        Route::post('/store', 'PetugasController@store')->name('account_petugas.store');
        Route::get('/show/{id}', 'PetugasController@show')->name('account_petugas.show');
        Route::put('/update', 'PetugasController@update')->name('account_petugas.update');
        Route::delete('delete/{id}', 'PetugasController@destroy')->name('account_petugas.delete');

    }); 

    

});
