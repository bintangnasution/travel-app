<?php

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

Route::get('/admin', function () {
    return view('admin/login_admin',[
        "title" => "Login Admin",
        "desc" => "add descriptions."
    ]);
});

Route::get('/dashboard', function () {
    return view('admin/dashboard_admin',[
        "title" => "Dashboard",
        "desc" => "add descriptions."
    ]);

});

// KATALOG 
Route::get('/travel', function () {
    return view('admin/katalog/travel',[
        "title" => "Katalog Travel",
        "desc" => "add descriptions."
    ]);
});
Route::get('/mobil', function () {
    return view('admin/katalog/mobil',[
        "title" => "Katalog Mobil",
        "desc" => "add descriptions."
    ]);
});
Route::get('/wisata', function () {
    return view('admin/katalog/wisata',[
        "title" => "Katalog Wisata",
        "desc" => "add descriptions."
    ]);
});

// KUSTOMISASI
Route::get('/add', function () {
    return view('admin/kustomisasi/add',[
        "title" => "Tambah Admin",
        "desc" => "add descriptions."
    ]);
});
Route::get('/kontak', function () {
    return view('admin/kustomisasi/kontak',[
        "title" => "Edit Info Kontak",
        "desc" => "add descriptions."
    ]);
});
Route::get('/layanan', function () {
    return view('admin/kustomisasi/layanan',[
        "title" => "Edit Info Layanan",
        "desc" => "add descriptions."
    ]);
});
Route::get('/tentang', function () {
    return view('admin/kustomisasi/tentang',[
        "title" => "Edit Info Tentang",
        "desc" => "add descriptions."
    ]);
});

// PESANAN
Route::get('/log', function () {
    return view('admin/pesanan/log',[
        "title" => "Log Pesanan",
        "desc" => "add descriptions."
    ]);
});

// Dropdown
Route::get('/settings', function () {
    return view('admin/settings',[
        "title" => "Pengaturan akun",
        "desc" => "add descriptions."
    ]);
});

Route::get('/form', function () {
    return view('admin/form',[
        "title" => "Pengaturan akun",
        "desc" => "add descriptions."
    ]);
});
