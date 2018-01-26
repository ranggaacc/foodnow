<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Resto;
use App\Paket;
use App\Custom;
use App\http\Requests;
use Session;

class DashboardAdminIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('rule:admin');

    }
    public function index()
    {
        $restos= Resto::all();
        return view('dashboardAdmin',['restos' => $restos]);
    }
}
