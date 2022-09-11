<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
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
    return view('frontview.home');
});

Route::get('/home', [HomeController::class, 'showhome']);
Route::get('/about', [HomeController::class, 'showabout']);
Route::get('/login', [HomeController::class, 'showlogin']);
Route::get('/collection', [HomeController::class, 'showcollection']);
Route::get('/single_page', [HomeController::class, 'showsingle_page']);
Route::get('/product-detail', [HomeController::class, 'showproductdetail']);
Route::get('/contact', [HomeController::class, 'showcontact']);

Route::get('/supplier', [HomeController::class, 'showsupplier']);
Route::get('/colegan', [HomeController::class, 'showcolegan']);
Route::get('/dashboard', [HomeController::class, 'showdashboard']);
Route::get('/product', [HomeController::class, 'showproduct']);
Route::get('/promo', [HomeController::class, 'showpromo']);
Route::get('/user', [HomeController::class, 'showuser']);

Route::get('/Produk', [ProdukController::class, 'index']);
Route::get('/Produk/create', [ProdukController::class, 'create']);
Route::post('/Produk', [ProdukController::class, 'store']);
Route::get('/Produk/{Produk}', [ProdukController::class, 'show']);
Route::get('/Produk/{Produk}/edit', [ProdukController::class, 'edit']);
Route::put('/Produk/{Produk}', [ProdukController::class, 'update']);
Route::delete('/Produk/{Produk}', [ProdukController::class, 'destroy']);

Route::get('/kategori', [HomeController::class, 'showkategori']);


Route::get('/template', function () {
    return view('Template.base');
});


