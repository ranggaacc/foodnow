<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Resto;
use App\Paket;
use App\Custom;
use App\http\Requests;
use Session;


class CustomAdminController extends Controller
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
        $custom= Custom::paginate(6);
        return view('menuAdmin',['customs' => $custom]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $input = new Custom;
            $input->nama_custom = $request->nama_custom;
            $input->harga_custom = $request->harga_custom;
            $input->resto_id = $request->id_resto;
            $input->kategori = $request->kategori;
            // $input->gambar = $request->image->store('public/upload/pakets');
            alert()->success('Menu Berhasil Ditambahkan');
            $input->save();
            
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $pakets =Resto::find(1)->paket()->where('resto_id', $id)->first();
        $restos=Resto::find($id);
        $customs =Custom::where(['resto_id'=>$restos->id_resto])->paginate(10);
        $i1=1;
        $i2=1;
        // $pakets= Paket::find($id)->pakets;
        return view('menuAdmin',['customs' => $customs,'i1'=>$i1,'i2'=>$i2,'restos'=>$restos]);
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
        $input = Custom::findOrFail($id);
        $input->nama_custom = $request->nama_custom;
        $input->harga_custom = $request->harga_custom;
        if(count($request->kategori)>0){
        $input->kategori= $request->kategori;}
        
        alert()->success('Edit Menu Berhasil ');

        $input->save();
        return redirect()->back();
   
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $custom = Custom::find($id);
        $custom->delete();
        alert()->success('Deleted !');
        return redirect()->back();
    }
}
