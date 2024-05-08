<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_merk'];
    public $timestamps = true;

    public function Product (){
        return $this->hasMany(Product::class);
    }
}
