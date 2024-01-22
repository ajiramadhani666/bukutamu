<?php
use App\Http\Controllers\admin\TamuController as AdminTamuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\tamuController;

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
Route::post('simpan', [tamuController::class, 'simpan']);
Route::get('/dashboard', [dashboardController::class, 'index']);
Route::get('/admin/data',[AdminTamuController::class,'index']);
Route::post('/admin/hapus-data',[AdminTamuController::class,'hapus']);

