<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\http\Requests;
use Illuminate\Support\Facades\Hash;
use Session;
class RegisterController extends Controller
{
    public function __construct(){

        $this->middleware('guest');

    }
    public function getRegister(){

    	return view('formRegister');

    }

    public function postRegister(Request $request){
    	$simpan = new User;
    	$simpan->name = $request->nama;
    	$simpan->username= $request->username;
    	$simpan->email = $request->email;
    	$simpan->password = Hash::make($request->password);
    	$simpan->roles_id = DB::table('roles')->select('id')->where('namaRule','user')->first()->id; 
        Session::flash('flash_notification', ["level"=>"success", "message"=>"Pendaftaran Berhasil"]);
        $simpan->save();
        alert()->success('FoodNow', 'Pendaftaran Berhasil');
        return redirect('/loginform');
        // return redirect()->back(); 

    }
}
