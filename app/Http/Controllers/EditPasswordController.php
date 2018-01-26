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


class EditPasswordController extends Controller
{

    public function show($id)
    {
        $users=User::find($id);
        return view('EditPassword',['users' => $users]);
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
            $input = User::findOrFail($id);
            $old= $request->oldpassword;
            $cek= DB::table('users')->where('id',$id)->select('password')->first();
            if($old == $cek->password){
                $input->password = Hash::make($request->newpassword);
                alert()->success('Edit Password Success');
                $input->save();
                return redirect()->back();
            }
            if (Hash::check('plain-text', $cek)) {
    // The passwords match...
            }
            else 
                Session::flash('flash_notification', ["level"=>"danger", "message"=>"Old Password Not Match !!"]);
                return redirect()->back(); 
            // $simpan->roles_id = DB::table('roles')->select('id')->where('namaRule','user')->first()->id; 
                

            
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
