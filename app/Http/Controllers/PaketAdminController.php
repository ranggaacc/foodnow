<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Resto;
use App\Paket;
use App\Custom;
use App\http\Requests;
use Session;


class PaketAdminController extends Controller
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
        // $paket= Paket::all();
        // return view('menuAdmin',['pakets' => $paket]);
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
            $input = new Paket;
            $input->nama_paket = $request->nama_paket;
            $input->harga_paket = $request->harga_paket;
            $input->resto_id = $request->id_resto;
            $input->deskripsi_paket = $request->deskripsi_paket;

            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $request->file('image')->move("imageUpload/",$fileName);
            $input->gambar = $fileName;

            alert()->success('Paket Berhasil Ditambahkan');
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
        $pakets =Paket::where(['resto_id'=>$restos->id_resto])->paginate(10);
        $customs =Custom::where(['resto_id'=>$restos->id_resto])->paginate(6);
        $i1=1;
        $i2=1;
        if(count($request->image)>0){
        $input->gambar = $request->image->store('/upload/images');}
        alert()->success('Edit Berhasil');
        // $pakets= Paket::find($id)->pakets;
        return view('menuAdmin',['pakets' => $pakets,'customs' => $customs,'i1'=>$i1,'i2'=>$i2,'restos'=>$restos]);
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
        $input = Paket::findOrFail($id);
        $input->nama_paket = $request->nama_paket;
        $input->harga_paket = $request->harga_paket;
        $input->deskripsi_paket = $request->deskripsi_paket;
        if(count($request->image)>0){

            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $request->file('image')->move("imageUpload/",$fileName);
            $input->gambar = $fileName;
        }
        alert()->success('Edit Paket Berhasil ');
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
        $paket = Paket::find($id);
        $paket->delete();
        alert()->success('Deleted !');
        return redirect()->back();
    }
}
