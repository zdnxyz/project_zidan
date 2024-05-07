<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk'=>'Vario 125', 'merek'=>'Honda', 'jumlah'=>4],
            ['nama_produk'=>'Beat Deluxe', 'merek'=>'Honda',  'jumlah'=>6],
            ['nama_produk'=>'Beat Pop', 'merek'=>'Honda',  'jumlah'=>10],  
            ['nama_produk'=>'Beat Street', 'merek'=>'Honda', 'jumlah'=>2],
            ['nama_produk'=>'Satria Fu', 'merek'=>'Suzuki',  'jumlah'=>27],
            ['nama_produk'=>'Vario 150', 'merek'=>'Honda',  'jumlah'=>11],
            ['nama_produk'=>'Vario 175', 'merek'=>'Honda', 'jumlah'=>16],
            ['nama_produk'=>'Ninja R', 'merek'=>'Kawasaki',  'jumlah'=>21],
            ['nama_produk'=>'Nmax', 'merek'=>'Honda',  'jumlah'=>18],  
            ['nama_produk'=>'PCX', 'merek'=>'Honda',  'jumlah'=>12],
        ];
        // memasukan data ke database
        DB::table('produks')->insert($produks);
    }
}
