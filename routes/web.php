<?php
use App\Models\Post;
use App\Models\Produks;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Product;
use App\Models\Merk;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|/
*/

Route::get('/', function () {
    return view('welcome');
});

Route ::get('/home', function () {
    return view ('biodata1');
});

Route ::get('/about', function () {
    $nama = "Zidan";
    $jk = "Laki-Laki";
    $alamat = "Rancamanyar";
    $pendidikan = "SMK";
    $pekerjaan = "Pelajar";
    return view ('biodata2', compact('nama','jk','alamat','pendidikan','pekerjaan'));
});

// parameter 
Route ::get('/about2/{nama}/{jk}/{alamat}/{pendidikan}/{pekerjaan}', function (Request $request, $nama, $jk, $alamat, $pendidikan, $pekerjaan) {
    $nama2 = $nama;
    $jk2 = $jk;
    $alamat2 = $alamat;
    $pendidikan2 = $pendidikan;
    $pekerjaan2 = $pekerjaan;
    return view ('param', compact ('nama2','jk2','alamat2','pendidikan2','pekerjaan2'));
});

Route ::get('/kontak',function () {
    return view ('biodata3');
});

Route ::get('/data_post', function () {
 // menampilkan semua data
    $post = Post::find(1);

return $post;
});

Route ::get('/data_produk', function () {
    $produks = Produks::all();
   
return view('produk_post', compact('produks'));
});

Route ::get('/data_pengguna', function () {
       $penggunas = Pengguna::all();
   
return view('pengguna_post', compact('penggunas'));
});

Route ::get('/data_telepon', function () {
    $telepons = Telepon::all();

return view('telepon_post', compact('telepons'));
});

Route ::get('/data_merk', function () {
    $merks = Merk::all();

return view('merk_post', compact('merks'));
});

Route ::get('/data_product', function () {
    $products = Product::all();

return view('product_post', compact('products'));
});
