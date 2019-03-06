<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_table extends Model
{
    //
    protected $table ="kategori";
    protected $fillabel =['id','nama_kategory','slug','tanggal_input_data'];
}
