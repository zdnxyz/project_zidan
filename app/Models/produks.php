<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produks extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_produk','merek','jumlah'];
    public $timestamps = true;
}
