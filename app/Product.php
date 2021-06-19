<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //jika nama tabel beda
        // protected $table = 'products';

    //jika nama primary bukan id
        // protected $PrimaryKey = 'id_barang';
    
    // jika tidak mau masukkan timestamp
    public $timesstamps = false;

    protected $fillable = [
        'name', 'description','price', 'category_id'
    ];


    //relasi ke tabel category

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
