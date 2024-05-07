<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $telepons = [
        ['nomor_telepon'=>'082215614091', 'pengguna_id'=>1],
        ['nomor_telepon'=>'082215614092', 'pengguna_id'=>2],
        ['nomor_telepon'=>'082215614093', 'pengguna_id'=>3],
        ['nomor_telepon'=>'082215614094', 'pengguna_id'=>4],
        ['nomor_telepon'=>'082215614095', 'pengguna_id'=>5],
    ];
    // memasukan data ke database
    DB::table('telepons')->insert($telepons);
    }
}
