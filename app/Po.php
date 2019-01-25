<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Carbon\Carbon;

class Po extends Model
{
     use Searchable;
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

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    
    // public function searchableAs(){
    //     return 'nomor';
    // }
}
