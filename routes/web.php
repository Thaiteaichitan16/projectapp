<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('cards');
// });
Route::get('loginn',[AdminController::class,'login']);
Route::post('loginn',[AdminController::class,'ceklogin']);
Route::get('logout',[AdminController::class,'logouta']);

//dashboard
Route::get('dashboard',[AdminController::class,'dash'])->middleware(AdminMiddleware::class);
Route::get('dashboardk',[AdminController::class,'dashk'])->middleware(AdminMiddleware::class);

Route::get('penjualan',[AdminController::class,'datapenjualan'])->middleware(AdminMiddleware::class);
//admin
Route::get('admin',[AdminController::class,'dataadmin'])->middleware(AdminMiddleware::class);
Route::post('admin',[AdminController::class,'tbadmins']);
Route::get('aedit/{id}',[AdminController::class,'editadmin']);
Route::post('aedit/{id}',[AdminController::class,'editadmins']);
Route::get('ahapus/{id}',[AdminController::class,'hapusadmin']);

//produk
Route::get('produk',[AdminController::class,'dataproduk'])->middleware(AdminMiddleware::class);
Route::post('produk',[AdminController::class,'tbproduks']);
Route::get('pedit/{id}',[AdminController::class,'editproduk']);
Route::post('pedit/{id}',[AdminController::class,'editproduks']);
Route::get('phapus/{id}',[AdminController::class,'hapusproduk']);
//pelanggan
Route::get('pelanggan',[AdminController::class,'datapelanggan'])->middleware(AdminMiddleware::class);
Route::get('tambahpelanggan',[AdminController::class,'tbpelanggan']);
Route::post('tambahpelanggan',[AdminController::class,'tbpelanggans']);
Route::get('Peedit/{id}',[AdminController::class,'editpelanggan']);
Route::post('Peedit/{id}',[AdminController::class,'editpelanggans']);
Route::get('Phapus/{id}',[AdminController::class,'hapuspelanggan']);