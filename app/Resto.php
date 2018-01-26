<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Resto extends Model
{
   public $timestamps = false;
   protected $primaryKey = 'id_resto';
   protected $fillable=['nama_resto','alamat_resto','no_telp','deskripsi','gambar','views'];
   
   public function pakets()
   {
        return $this->hasMany('App\Paket');

   }
   public function cutoms()
   {
        return $this->hasMany('App\Custom');

   }
}
