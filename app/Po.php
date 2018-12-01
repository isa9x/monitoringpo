<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Po extends Model
{
     protected $table = 'po';
     protected $fillable = [
        'user_id',
        'nomor', 
        'nama_vendor',
        'tanggal_po',
        'tanggal_kirim',
        'status'
    ];

    public function barang(){
        return $this->hasMany('App\Barang');
    }
}
