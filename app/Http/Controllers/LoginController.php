<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Alert;
class LoginController extends Controller
{
    public function postLogin(Request $request){

    	if(Auth::attempt([
    		'email'=>$request->email,
    		'password'=>$request->password

    		])){
            alert()->info('FoodNow', 'WELCOME BACK :)');
    		return redirect('/user');
    	}elseif (Auth::attempt([
    		'username'=>$request->email,
    		'password'=>$request->password

    		])){
            alert()->info('FoodNow', 'WELCOME BACK :)');
    		return redirect('/user');
    	}
    	else
    	{
            alert()->error('username or email or password Wrong !', 'Login Failed')->autoclose(3500);
            return redirect('/user');
    	
    	}

    }

    public function postLogout(){
    	// Session::flash('flash_notification', ["level"=>"success", "message"=>"LogOut Berhasil"]);
    	Auth::logout();
        alert()->success('You have been logged out.', 'Good bye!');
    	return redirect('/user');
    }
}
