<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\AntriankiaController;
use App\Http\Controllers\AntrianktpController;
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
Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('antriannew.home');

Auth::routes();

// KIA
 Route::get('/getantrian', [App\Http\Controllers\AntrianController::class, 'getantrian'])->name('getantrian');

 Route::post('/insert', [App\Http\Controllers\AntrianController::class, 'insert'])->name('insert');

 Route::get('admin/{id}/update', [App\Http\Controllers\AntriankiaController::class, 'update'])->name('update');

 Route::get('/get_antrian_kia', [App\Http\Controllers\AntriankiaController::class, 'get_antrian_kia'])->name('get_antrian_kia');
 
 Route::get('/get_antrian_kia_sekarang', [App\Http\Controllers\AntriankiaController::class, 'get_antrian_kia_sekarang'])->name('get_antrian_kia_sekarang');
 
 Route::get('/get_antrian_kia_selanjutnya', [App\Http\Controllers\AntriankiaController::class, 'get_antrian_kia_selanjutnya'])->name('get_antrian_kia_selanjutnya');
 
 Route::get('/get_jumlah_antrian_kia', [App\Http\Controllers\AntriankiaController::class, 'get_jumlah_antrian_kia'])->name('get_jumlah_antrian_kia');
 
 Route::get('/get_sisa_antrian_kia', [App\Http\Controllers\AntriankiaController::class, 'get_sisa_antrian_kia'])->name('get_sisa_antrian_kia');
 
 Route::get('/dashboard_kia', [App\Http\Controllers\AntriankiaController::class, 'index'])->name('index');


 //KTP

Route::get('/getantrianktp', [App\Http\Controllers\AntrianController::class, 'getantrianktp'])->name('getantrianktp');

Route::middleware(['cors'])->group(function () {
Route::post('/insertktp', [App\Http\Controllers\AntrianController::class, 'insertktp'])->name('insertktp');
});
Route::get('/dashboard_ktp', [App\Http\Controllers\AntrianktpController::class, 'index'])->name('index');

Route::get('admin/{id}/update_ktp', [App\Http\Controllers\AntrianktpController::class, 'update_ktp'])->name('update_ktp');

Route::get('/get_antrian_ktp', [App\Http\Controllers\AntrianktpController::class, 'get_antrian_ktp'])->name('get_antrian_ktp');

Route::get('/get_antrian_ktp_sekarang', [App\Http\Controllers\AntrianktpController::class, 'get_antrian_ktp_sekarang'])->name('get_antrian_ktp_sekarang');

Route::get('/get_antrian_ktp_selanjutnya', [App\Http\Controllers\AntrianktpController::class, 'get_antrian_ktp_selanjutnya'])->name('get_antrian_ktp_selanjutnya');

Route::get('/get_jumlah_antrian_ktp', [App\Http\Controllers\AntrianktpController::class, 'get_jumlah_antrian_ktp'])->name('get_jumlah_antrian_ktp');

Route::get('/get_sisa_antrian_ktp', [App\Http\Controllers\AntrianktpController::class, 'get_sisa_antrian_ktp'])->name('get_sisa_antrian_ktp');


//KTP EL

Route::get('/getantrianktpel', [App\Http\Controllers\AntrianController::class, 'getantrianktpel'])->name('getantrianktpel');

Route::post('/insertktpel', [App\Http\Controllers\AntrianController::class, 'insertktpel'])->name('insertktpel');

Route::get('/dashboard_ktpel', [App\Http\Controllers\AntrianktpelController::class, 'index'])->name('index');

Route::get('admin/{id}/update_ktpel', [App\Http\Controllers\AntrianktpelController::class, 'update_ktpel'])->name('update_ktpel');

Route::get('/get_antrian_ktpel', [App\Http\Controllers\AntrianktpelController::class, 'get_antrian_ktpel'])->name('get_antrian_ktpel');

Route::get('/get_antrian_ktpel_sekarang', [App\Http\Controllers\AntrianktpelController::class, 'get_antrian_ktpel_sekarang'])->name('get_antrian_ktpel_sekarang');

Route::get('/get_antrian_ktpel_selanjutnya', [App\Http\Controllers\AntrianktpelController::class, 'get_antrian_ktpel_selanjutnya'])->name('get_antrian_ktpel_selanjutnya');

Route::get('/get_jumlah_antrian_ktpel', [App\Http\Controllers\AntrianktpelController::class, 'get_jumlah_antrian_ktpel'])->name('get_jumlah_antrian_ktpel');

Route::get('/get_sisa_antrian_ktpel', [App\Http\Controllers\AntrianktpelController::class, 'get_sisa_antrian_ktpel'])->name('get_sisa_antrian_ktpel');


//Akta

Route::get('/getantrianakta', [App\Http\Controllers\AntrianController::class, 'getantrianakta'])->name('getantrianakta');

Route::post('/insertakta', [App\Http\Controllers\AntrianController::class, 'insertakta'])->name('insertakta');

Route::get('/dashboard_akta', [App\Http\Controllers\AntrianaktaController::class, 'index'])->name('index');

Route::get('admin/{id}/update_akta', [App\Http\Controllers\AntrianaktaController::class, 'update_akta'])->name('update_akta');

Route::get('/get_antrian_akta', [App\Http\Controllers\AntrianaktaController::class, 'get_antrian_akta'])->name('get_antrian_akta');

Route::get('/get_antrian_akta_sekarang', [App\Http\Controllers\AntrianaktaController::class, 'get_antrian_akta_sekarang'])->name('get_antrian_akta_sekarang');

Route::get('/get_antrian_akta_selanjutnya', [App\Http\Controllers\AntrianaktaController::class, 'get_antrian_akta_selanjutnya'])->name('get_antrian_akta_selanjutnya');

Route::get('/get_jumlah_antrian_akta', [App\Http\Controllers\AntrianaktaController::class, 'get_jumlah_antrian_akta'])->name('get_jumlah_antrian_akta');

Route::get('/get_sisa_antrian_akta', [App\Http\Controllers\AntrianaktaController::class, 'get_sisa_antrian_akta'])->name('get_sisa_antrian_akta');

//layar jenis antrian

Route::get('/layar_jenis', [App\Http\Controllers\LayarjenisController::class, 'index'])->name('antriannew.layar_jenis');

//layar nomor antrian
Route::get('/layar_nomor', [App\Http\Controllers\LayarnomorController::class, 'index'])->name('antriannew.layar_nomor');

