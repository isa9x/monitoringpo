<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
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
}