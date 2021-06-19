<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Midsemester extends Model
{
    protected $table = 'midsemesters';
    protected $PrimaryKey = 'id_239';

     protected $fillable = [
        'kolom_nim', 'kolom_nama','kolom_umur', 'kolom_alamat'
    ];
    
}
