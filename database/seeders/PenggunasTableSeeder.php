<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = [
            ['nama'=>'Zidan'],
            ['nama'=>'Ahmad'],
            ['nama'=>'Nur'],
            ['nama'=>'Fauzan'],
            ['nama'=>'Faiza'],
            
        ];
        DB::table('penggunas')->insert($penggunas);
    }
}
