<?php

//use Illuminate\Support\Facades\Route;

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
/*Route::get('/', function() {
    return view('welcome');
});


Route::get('/latihankirimdata/{title}', function($title) {
    return view('welcome', ['title' => $title]);
});

Route::get('/latihankirimdata', function() {
    return view('welcome', ['title' => 'mahasiswa sistem informasi']);
});

Route::get('studyclub', function () {
    //return view('welcome');
    echo "anda tidak memasukan nama"; 
});

Route::get('/studyclub/{nama}', function ($nama) {
    //return view('welcome');
    echo "Selamat datang di study club ".$nama; 
});

Route::get('/latihanblade', function() {
    return view('latihan', ['data1'=> '24' ]);
});

Route::get('/latihanblade2', function() {
    return view('home');
});

Route::get('/dasboard', function() {
    return view('index');
});*/

//use App\Http\Controllers\kategoricontroller;

//Route::get('/kategori/semua', [kategoricontroller::class, 
//'semua']);

/*Route::get('/kategori/tambah', function() {
    kategori::create([
        'nama_kategori' => "Pakaian Baru",
        'deskripsi' => "Semua jenis pakaian baru"
    ]);
});

Route::get('/kategori/update/{id}', function($id) {
    kategori::find($id)->update([
        'nama_kategori' => "Pakaian Anak",
        'deskripsi' => "Semua jenis pakaian Anak"
    ]);
});

Route::get('/kategori/hapus/{id}', function($id) {
    kategori::find($id)->delete();
});*/


/*use App\Http\Controllers\kategoricontroller2;

Route::resource('/kategori', kategoricontroller2::class);*/

Route::get('/dashboard', function (){
    return view('index');
})->name('dashboard');

use App\Http\Controllers\mahasiswacontroller;

Route::resource('mahasiswa', mahasiswacontroller::class);