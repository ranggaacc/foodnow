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


class SaveDeleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('rule:user');

    }
    public function destroy($id)
    {
        $save = Save::find($id);
        $save->delete();
        alert()->success('Deleted !');
        return redirect()->back();
    }

}
