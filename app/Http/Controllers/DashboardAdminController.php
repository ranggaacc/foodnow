<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Resto;
use App\Paket;
use App\Custom;
use App\http\Requests;
use Session;

class DashboardAdminController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
        $this->middleware('rule:admin');

    }
    public function index()
    {
        $restos= Resto::paginate(9);
        return view('dashboardAdmin',['restos' => $restos]);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nama_resto' => 'required',
        //     'alamat_resto' => 'required',
        //     'no_telp'=>'required',
        //     'deskripsi'=> 'required|max:200',
        //     'gambar' => 'required|image|mimes:jpeg,jpg,png,gif,svg',
        //     ]);
        
            $input = new Resto;
            $input->nama_resto = $request->nama_resto;
            $input->alamat_resto = $request->alamat_resto;
            $input->no_telp = $request->no_telp;
            $input->deskripsi = $request->deskripsi;

            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $request->file('image')->move("imageUpload/",$fileName);
            $input->gambar = $fileName;


            // $input->gambar = $request->image->store('/upload/images');
            alert()->success('Berhasil Ditambahkan');
            $input->save();
            return redirect()->back();
    }

    public function show($id)
    {
        // $pakets =Resto::find(1)->paket()->where('resto_id', $id)->first();
        $restos=Resto::find($id);
        $pakets =Paket::where(['resto_id'=>$restos->id_resto])->paginate(10);
        $i1=1;
        $i2=1;
        // $pakets= Paket::find($id)->pakets;
        return view('paketAdmin',['pakets' => $pakets,'i1'=>$i1,'i2'=>$i2,'restos'=>$restos]);
    }


    public function update(Request $request, $id)
    {
        $input = Resto::findOrFail($id);
        $input->nama_resto = $request->nama_resto;
        $input->alamat_resto = $request->alamat_resto;
        $input->no_telp = $request->no_telp;
        $input->deskripsi = $request->deskripsi;
        if(count($request->image)>0){

            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $request->file('image')->move("imageUpload/",$fileName);
            $input->gambar = $fileName;
        }

        alert()->success('Edit Berhasil');

        $input->save();
        return redirect('/dashboardAdmin');  
    }


    public function destroy($id)
    {
        $resto = Resto::find($id);
        $resto->delete();
        alert()->success('Delete Berhasil');
        return redirect('/dashboardAdmin');
    }
}
