<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Resto;
use App\Paket;
use App\Custom;
use App\Save;
use App\User;
use App\http\Requests;
use Session;


class EditProfilController extends Controller
{

    public function show($id)
    {
        $users=User::find($id);
        return view('EditProfil',['users' => $users]);
    }


    public function update(Request $request, $id)
    {
            $input = User::findOrFail($id);
            $input->username = $request->username;
            $input->name = $request->name;
            $input->email = $request->email;
            $input->password = Hash::make($request->password);
            alert()->success('Edit success');
            $input->save();
            return redirect()->back();
            
    }
}
