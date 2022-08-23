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
    return view('index');
});
Route::get('/device', function () {
    return view('device.index');
});
Route::get('/edit', function () {
    return view('device.edit');
});
Route::get('/create', function () {
    return view('device.create');
});

Route::group(['prefix' => 'device'], function () {
    Route::get('/{id}', function ($id) {
        return view('device.index', compact('id'));
    });

    Route::get('/edit/{id}', function ($id) {
        return view('device.edit', compact('id'));
    });

});
//Route::get('/api/v1/devices', [\App\Http\Controllers\DeviceController::class, 'index']);


Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'devices'], function () {
        Route::get('/', [\App\Http\Controllers\DeviceController::class, 'index']);
    });

    Route::group(['prefix' => 'device'], function () {
        Route::post('/', [\App\Http\Controllers\DeviceController::class, 'store']);
        Route::get('/{id}', [\App\Http\Controllers\DeviceController::class, 'oneDevice']);
        Route::put('/edit/{id}', [\App\Http\Controllers\DeviceController::class, 'update']);
        Route::delete('/delete/{id}', [\App\Http\Controllers\DeviceController::class, 'delete']);
        Route::get('/{deviceId}/historySales', [\App\Http\Controllers\DeviceHistorySalesController::class, 'getHistorySalesByDevice']);
    });
});
