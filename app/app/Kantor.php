<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kantor extends Model
{
    // abaikan ini dulu
    protected $table = 'kantor';
    protected $fillable = ['nama_kantor','alamat'];
}
