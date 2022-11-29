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
// Login
Route::group(['prefix' => '/masuk', 'namespace' => 'App\Http\Controllers\Auth'], function () {

    Route::get('/login', 'LoginController@login')->name('login');
    Route::post('/login', 'LoginController@login_action')->name('login.action');
    Route::get('/register', 'LoginController@register')->name('register');
    Route::post('/register', 'LoginController@register_action')->name('register.action');
    Route::get('/forget_password', 'LoginController@forget_password')->name('forget_password');
    Route::post('/forget_password', 'LoginController@forget_password_action')->name('forget_password.action');
    Route::get('/logout', 'LoginController@logout')->name('logout');


});

Route::group(['prefix' => '/', 'namespace' => 'App\Http\Controllers\User'], function () {

    Route::get('/', 'HomeController@index')->name('index');

});


// Admin
Route::group(['prefix' => '/admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {

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
     
    Route::group(['prefix' => '/stok'], function () {

        Route::get('/', 'StokController@index')->name('stok');
        Route::get('/data', 'StokController@data')->name('stok.tambah');
        Route::post('/store', 'StokController@store')->name('stok.store');
        Route::get('/show/{id}', 'StokController@show')->name('stok.show');
        Route::put('/update', 'StokController@update')->name('stok.update');
        Route::delete('delete/{id}', 'StokController@destroy')->name('stok.delete');

    }); 

    Route::group(['prefix' => '/transaksi'], function () {

        Route::get('/', 'TransaksiController@index')->name('transaksi');
        Route::get('/data', 'TransaksiController@data')->name('transaksi.tambah');
        Route::post('/store', 'TransaksiController@store')->name('transaksi.store');
        Route::get('/show/{id}', 'TransaksiController@show')->name('transaksi.show');
        Route::put('/update', 'TransaksiController@update')->name('transaksi.update');
        Route::delete('delete/{id}', 'TransaksiController@destroy')->name('transaksi.delete');

    }); 
    
    Route::group(['prefix' => '/golongan'], function () {

        Route::get('/', 'GolonganController@index')->name('golongan');

    }); 

    

});
