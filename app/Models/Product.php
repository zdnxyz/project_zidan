<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_product','jumlah','merk_id'];
    public $timestamps = true;

    public function Merk (){
        return $this->BelongsTo(Merk::class, 'merk_id');
    }
}
