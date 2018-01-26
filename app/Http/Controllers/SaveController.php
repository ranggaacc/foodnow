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


class SaveController extends Controller
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
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = new Save;
        if($request->type=="paket"){
            
            $input->user_id = $request->user;
            $input->amount = $request->totalpenjualan;
            $input->restoran=$request->restoran;
            $input->nama_user=$request->username;
            $input->type=$request->type;
            $details = "";
            for($i=0;$i<$request->nomer;$i++){
                if($request->{'quantity'.$i} != null)
                    $details = $details.$request->{'paketo'.$i}." {".$request->{'quantity'.$i}."pcs}".", ";
            }
            $details=rtrim($details, ', ');
            $input->detail=$details;

            alert()->success('Berhasil Ditambahkan');
            $input->save();
            return redirect()->back();
        }
        else{
         

            $input->user_id = $request->user;
            $input->amount = $request->penjualanCustom;
            $input->restoran=$request->restoran;
            $input->nama_user=$request->username;
            $input->type=$request->type;

            $details = "";
            for($i=0;$i<6;$i++){
                if($request->{'select'.$i} != null)
                    $details = $details.$request->{'select'.$i}.", ";
            }
            $details=rtrim($details, ', ');
            $input->detail=$details." {quantity ".$request->quantityCustom."pcs}";
            
            alert()->success('Berhasil Ditambahkan');
            $input->save();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $i1=1;
        $users=User::find($id);
        $saves= Save::where(['user_id'=>$users->id])->paginate(10);
        return view('transaksi',['saves' => $saves,'i1'=>$i1]);
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
        $save = Save::find($id);
        $save->delete();
        alert()->success('Deleted !');
        return redirect()->back();
    }
}
