<?php

use App\Http\Controllers\mahasiswaControler;
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
    $mahasiswa = "Teuku  Alif Baihaqy";
    $umur = 20;
    //return " HALO UINSU, Nama Saya $mahasiswa, Umur Saya $umur";
    return view('index', compact("mahasiswa"));
});
Route::get('HOME', function () {
    return "ini adalah halaman Home";
    return view('home');
});
// Route::get('mahasiswa', function () {
//     return "ini adalah halaman mahasiswa";
//     return view('mahasiswa');
// });

route::get('mahasiswa', [mahasiswaControler::class, 'index']);
route::get('mahasiswa/create', [mahasiswaControler::class, 'create']);
route::post('/mahasiswa', [mahasiswaControler::class, 'store']);
