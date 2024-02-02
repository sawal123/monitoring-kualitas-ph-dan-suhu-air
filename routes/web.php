<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MonitoringController;
use Illuminate\Contracts\Container\BindingResolutionException;
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

// Route::get('/', [MonitoringController::class, 'index']);
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});


Route::get('/cardstatus',[MonitoringController::class, 'cardstatus']);
Route::get('/tableajax',[MonitoringController::class, 'tableajax']);
Route::get('/graphicmonitoring',[MonitoringController::class, 'graphicmonitoring']);


Route::get('/rekap', [Controller::class, 'index']);

Route::get('/table', function () {
    return view('page.table');
});

Route::get('/phair', [PostController::class, 'index']);

Route::post('/update/data', [PostController::class, 'update']);

Route::get('/data/hapus/{id}', [Controller::class, 'hapus'])->name('dashboard.hapus');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', [MonitoringController::class, 'index'])->name('');
});
