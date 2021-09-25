<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // rubah saja table dengan kata kunci 
    // protected $table = 'nama table';
protected $table = 'pegawai';

// fillable disini setting saja sesuai fild yang ada,namun untuk field dengan nama : ['name','email','password'] tidak boleh di ganti,karna akan eror,cukup tambahkan saja bila ada field lain,tanpa mengganti field ketiga tadi
    protected $fillable = [
        'name', 'email', 'password','kantor_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    //  Tetap di hidden,dan jangan dirubah
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    // casts tetapkan saja
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // untuk tambahkan relasi bisa tambahkan saja disini
    // public function kantor()
    // {
    //     # code...
    //     return $this->belongsTo(Kantor::class,'kantor_id');
    // }

    /* Kesimpulan,hanya mengganti nama table saja,dan field name,email,password pastikan tetap ada,kalau ingin berelasi boleh boleh saja,hehe */
}
