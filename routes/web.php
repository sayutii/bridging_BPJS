<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReferensiController;
use League\CommonMark\Reference\Reference;

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
    return view('home');
});
// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/referensi/diagnosa/{diagnosa}', [ReferensiController::class, 'getDiagnosa']);
Route::get('/referensi/poli/{poli}', [ReferensiController::class, 'getPoli']);
Route::get('/referensi/kode_faskes/{kode_faskes}/{jenis_faskes}', [ReferensiController::class, 'getFaskes']);
Route::get('/referensi/dokter/pelayanan/{pelayanan}/tglpel/{tglpel}/spesialis/{kode}', [ReferensiController::class, 'getDokter']);
Route::get('/referensi/propinsi', [ReferensiController::class, 'propinsi']);
Route::get('/referensi/kabupaten/propinsi/{propinsi}', [ReferensiController::class, 'getKabupaten']);
Route::get('/referensi/kecamatan/kabupaten/{kabupaten}', [ReferensiController::class, 'getKecamatan']);
Route::get('/referensi/kelasrawat', [ReferensiController::class, 'kelasRawat']);

Route::get('/referensi', [ReferensiController::class, 'index']);