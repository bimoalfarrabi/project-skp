<?php

use App\Http\Controllers\SasaranController;
use App\Http\Controllers\SkpController;
use App\Models\Sasaran;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('pegawai')->group(function(){
    
    Route::prefix('/skp')->group(function () {
        Route::get('/daftar-skp', [SkpController::class, 'index'])->name('pegawai.skp');
        Route::get('/tambah-skp', [SkpController::class, 'create'])->name('pegawai.skp.tambah-skp');
        Route::post('/simpan-skp', [SkpController::class, 'store'])->name('pegawai.tambahSkp');

        Route::prefix('/matriks')->group(function(){
            Route::get('/daftar-matriks', [SasaranController::class, 'matriks'])->name('daftarMatriks');
            Route::get('/tambah-matriks', [])->name('tambahMatriks');
            Route::get('/ubah-matriks', [])->name('ubahMatriks');
        });

        Route::prefix('sasaran-kerja')->group(function(){
            Route::get('/daftar-sasaran', [SasaranController::class, 'sasaranView'])->name('sasaranView');
            Route::get('/tambah-sasaran', [SasaranController::class, 'tambahSasaran'])->name('tambahSasaran');
            Route::post('/tambah-sasaran', [SasaranController::class, 'storeSasaran'])->name('storeSasaran');
            
            Route::get('/indikator/{id}', [SasaranController::class, 'tambahIndikator'])->name('indikatorView');
            Route::post('/indikator/{id}', [SasaranController::class, 'storeIndikator'])->name('indikatorStore');
            Route::get('/delete/{id}', [SasaranController::class, 'deleteSasaran'])->name('sasaranDelete');
            Route::get('/deleteIndikator/{id}/{idIndikator}', [SasaranController::class, 'hapusIndikator'])->name('indikatorHapus');
        });
    });
    
});
