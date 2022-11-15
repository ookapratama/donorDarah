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

    Route::prefix('/account_admin')->group(function () {

        Route::get('/', 'AkunController@index')->name('akun');
        Route::get('/data', 'AkunController@data')->name('tambah');
    });
});
