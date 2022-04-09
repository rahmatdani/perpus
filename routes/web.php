<?php
use App\Http\Controllers\Petugas\KategoriController;
use App\Http\Controllers\Petugas\RakController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
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
//     return view('welcome');
// });

Route::get('/login',[LoginController::class, 'index']);
Route::post('/postlogin',[LoginController::class, 'postlogin']);
Route::get('/logout',[LoginController::class, 'logout']);


Route::group(['middleware' => ['auth','role:1']], function (){
    Route::get('/home', [HomeController::class, 'home']);
    Route::get('/inventory/masterbuku',[HomeController::class, 'masterbuku']);
    Route::get('/home/siswa', [SiswaController::class, 'siswa']);
});
Route::group(['middleware' => ['auth','role:2']], function (){
    Route::get('/petugas/kategori', [KategoriController::class, 'home']);
    Route::get('/petugas/rak', [RakController::class, 'index']);
    Route::get('/inventory/masterbuku',[HomeController::class, 'masterbuku']);
});
Route::group(['middleware' => ['auth','role:3']], function (){
    Route::get('/siswa', [SiswaController::class, 'siswa']);
});
// Route::get('/home', function (){
//     return view('home');
// });
