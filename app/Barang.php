<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Barang extends Model
{
     use Searchable;
     protected $table = 'barang';
     protected $fillable = [
        'po_id',
        'nama', 
        'jumlah',
        'satuan',
        'harga'
    ];

    public function po(){
        return $this->belongsTo('App\Po','po_id');
    }

    // public function searchableAs(){
    //     return 'nama';
    // }
}
