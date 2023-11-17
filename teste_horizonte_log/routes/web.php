<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrotasController;
use App\Http\Controllers\CsvController;

Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('/frotas', [FrotasController::class, 'index'])->name('frotas.index');
Route::get('/frotas/create', [FrotasController::class, 'create'])->name('frotas.create');
Route::post('/frotas', [FrotasController::class, 'store'])->name('frotas.store');
Route::get('/frotas/{frota}/edit', [FrotasController::class, 'edit'])->name('frotas.edit');
Route::put('/frotas/{frota}', [FrotasController::class, 'update'])->name('frotas.update');
Route::delete('/frotas/{frota}', [FrotasController::class, 'destroy'])->name('frotas.destroy');
Route::get('/upload', [CsvController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload-csv', [CsvController::class, 'uploadCsv'])->name('upload.csv');

