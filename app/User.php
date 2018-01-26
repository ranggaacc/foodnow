<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'email', 'password','roles_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){

        return $this->belongsTo('App\Role','roles_id');
    }
    
    public function punyaRule($namaRule){
        // dd($this->role->namaRule==$namaRule); buat cek apa bener dia pake role user atau bukan, keluaran true atau false

        if($this->role->namaRule == $namaRule){
            return true;

        }
        return false;
    }
    public function saves()
   {

      return $this->hasMany('App\Save');
   }


}
