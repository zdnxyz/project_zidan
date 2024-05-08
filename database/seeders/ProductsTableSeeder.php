<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['nama_product'=>'Porsche 911','jumlah'=>101,'merk_id'=>1],
            ['nama_product'=>'Porsche Taycan','jumlah'=>51,'merk_id'=>2],
            ['nama_product'=>'Ferrari Daytona SP 3','jumlah'=>3,'merk_id'=>3],
            ['nama_product'=>'Ferrari SF90 Stradale ','jumlah'=>10,'merk_id'=>3],
            ['nama_product'=>'Lamborghini Aventador','jumlah'=>24,'merk_id'=>2],
            ['nama_product'=>'Lamborghini Huracan','jumlah'=>39,'merk_id'=>1],
            
        ];
        DB::table('products')->insert($products);
    }
}
