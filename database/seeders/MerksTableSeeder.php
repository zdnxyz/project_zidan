<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merks = [
            ['nama_merk'=>'Porsche'],
            ['nama_merk'=>'Ferrrari'],
            ['nama_merk'=>'Lamborghini'],

        ];
        DB::table('merks')->insert($merks);
    }
}
