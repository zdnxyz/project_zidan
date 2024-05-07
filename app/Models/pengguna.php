<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama'];
    public $timestamps = true;

    public function Telepon (){
        return $this->hasOne(Telepon::class);
    }
}
