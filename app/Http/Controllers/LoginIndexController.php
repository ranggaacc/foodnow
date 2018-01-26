<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginIndexController extends Controller
{
    public function __construct(){

        $this->middleware('guest');

    }
    public function getLogin(){

            return view('formLogin');

    }
}
