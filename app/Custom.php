<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custom extends Model
{
   public $timestamps = false;
   protected $primaryKey = 'id_custom';
   protected $fillable=['nama_custom','harga_custom','kategori'];

    public function resto()
    {
        return $this->belongsTo('App\Resto','resto_id');
    }
}
