<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
   public $timestamps = false;
   protected $primaryKey = 'id_paket';
   protected $fillable=['nama_paket','harga_paket'];

    public function resto()
    {
        return $this->belongsTo('App\Resto','resto_id');
    }
}
