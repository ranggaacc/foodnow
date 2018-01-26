<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Resto;
use App\Paket;
use App\Custom;
use App\http\Requests;
use Session;

class WarungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('rule:user'||'rule:admin');

    }
    
    public function index()
    {
     return view('warung',['users' => $users]);   
    }
    public function show($id)
    {
        $restos=Resto::find($id);
        $pakets =Paket::where(['resto_id'=>$restos->id_resto])->get();
        $pakets2 =Paket::where(['resto_id'=>$restos->id_resto])->paginate(8);
        $customs =Custom::where(['resto_id'=>$restos->id_resto])->get();
        $nasis =Custom::where('kategori','nasi')->where(['resto_id'=>$restos->id_resto])->get();
        $sayurs =Custom::where('kategori','sayur')->where(['resto_id'=>$restos->id_resto])->get();
        $lauks =Custom::where('kategori','lauk')->where(['resto_id'=>$restos->id_resto])->get();
        $buahs =Custom::where('kategori','buah')->where(['resto_id'=>$restos->id_resto])->get();
        $lainnyas =Custom::where('kategori','lainnya')->where(['resto_id'=>$restos->id_resto])->get();
        $minums =Custom::where('kategori','minum')->where(['resto_id'=>$restos->id_resto])->get();
        $views_id=$restos->views++;
        $i1=1;
        $i2=1;
        // $pakets= Paket::find($id)->pakets;
        return view('warung',['pakets' => $pakets,'pakets2' => $pakets2,'customs' => $customs,'i1'=>$i1,'i2'=>$i2,'restos'=>$restos,'nasis'=>$nasis,'sayurs'=>$sayurs,'lauks'=>$lauks,'buahs'=>$buahs,'lainnyas'=>$lainnyas,'minums'=>$minums,'views_id'=>$views_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
