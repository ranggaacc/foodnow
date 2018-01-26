<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Resto;
use App\Paket;
use App\Custom;
use App\Save;
use App\User;
use App\http\Requests;
use Session;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restos= Resto::paginate(9);
        $pakets= Paket::all();
        return view('welcome',['restos' => $restos,'pakets' => $pakets]);
        
    }
    
}
