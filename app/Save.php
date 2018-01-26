<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    
	protected $primaryKey = 'id_save';
    protected $fillable = [
        'user_id', 'detail','amount','type','created_at',
    ];
   public function customer()
   {

      return $this->belongsTo('App\User');
   }

}
